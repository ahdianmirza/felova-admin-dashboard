import MenuList from "@/Components/Sidebar/MenuList";
import SidebarNew from "@/Components/Sidebar/SidebarNew";
import Action from "@/Components/Soil/Action";
import Paginator from "@/Components/Soil/Paginator";
import SearchBar from "@/Components/Soil/SearchBar";
import Sorted from "@/Components/Soil/Sorted";
import TableData from "@/Components/Soil/TableData";
import { Head } from "@inertiajs/react";
import { useState } from "react";
import { useEffect } from "react";
import { ToastContainer } from "react-toastify";

export default function Soil(props) {
    const { title, dataSoil } = props;
    const [soilRT, setSoilRT] = useState([]);
    const [count, setCount] = useState(1);
    const [currentPage, setCurrentPage] = useState(1);
    const recordsPerPage = 25;
    const lastIndex = currentPage * recordsPerPage;
    const firstIndex = lastIndex - recordsPerPage;
    const records = soilRT && soilRT.slice(firstIndex, lastIndex);
    const npage = soilRT && Math.ceil(soilRT.length / recordsPerPage);
    const numbers = [...Array(npage + 1).keys()].slice(1);
    const [search, setSearch] = useState("");

    const prePage = () => {
        if (currentPage !== firstIndex) {
            setCurrentPage(currentPage - 1);
        }
    }

    const nextPage = () => {
        if (currentPage !== lastIndex) {
            setCurrentPage(currentPage + 1);
        }
    };

    const changeCurrentPage = (index) => {
        setCurrentPage(index)
    };

    async function fetchData() {
        fetch(route("dataSoil"))
            .then((res) => {
                return res.json();
            })
            .then((data) => {
                setSoilRT(data);
            });
    }

    useEffect(() => {
        let timerFetch = setTimeout(() => {
            fetchData();
            setCount(count+1);
        }, [2000]);

        return () => {
            clearTimeout(timerFetch);
        };
    }, [count]);

    const myDate = (date) => {
        return new Date(date);
    };
    const formatterTime = new Intl.DateTimeFormat("en-US", {
        hour: "2-digit",
        minute: "2-digit",
        hour12: false,
    });

    return (
        <div>
            <Head title={title} />
            <ToastContainer
                position="top-right"
                autoClose={3000}
                closeOnClick
                hideProgressBar={false}
                newestOnTop={false}
                rtl={false}
                pauseOnFocusLoss={false}
                draggable={false}
                pauseOnHover={false}
                theme="light"
            />

            {/* Sidebar Start */}
            {/* <Sidebar /> */}
            <SidebarNew />
            <aside className="fixed top-0 left-0 z-0 pt-20 w-64 duration-500 hidden sm:block h-screen transition-all bg-primary">
                <MenuList />
            </aside>
            {/* Sidebar End */}

            {/* Soil Content Start */}
            <div className="p-2 sm:ml-64">
                <div className="p-1 mt-14">
                    <div className="w-full bg-white p-3">
                        <div className="flex items-center justify-between">
                            <div className="flex flex-col justify-center items-start">
                                <h1 className="text-lg md:text-2xl font-extrabold text-primary-text text-start">
                                    Menu Soil Station
                                </h1>
                                <p className="text-start">
                                    <span className="text-sm font-bold text-primary-text">
                                        {soilRT ? soilRT.length : "0"} data,
                                    </span>{" "}
                                    <small className="text-[#A3A4A8]">
                                        hasil monitoring kualitas tanah
                                    </small>
                                </p>
                            </div>
                        </div>

                        <div className="my-5">
                            {/* Data Timer Mobile Start */}

                            {/* Data Timer Mobile End */}

                            <SearchBar search={search} setSearch={setSearch} />
                            <Action />
                            <Sorted />

                            {/* Table md Breakpoint Start */}
                            <TableData>
                                <TableData.TableHead>
                                    <TableData.TableHeadTitle>
                                        Waktu
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Suhu 1
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Kelembapan 1
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Suhu 2
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Kelembapan 2
                                    </TableData.TableHeadTitle>
                                </TableData.TableHead>
                                <TableData.TableBody>
                                    {records ? (
                                        records.length > 0 ? (
                                            records
                                                .filter((soil) => {
                                                    return search.toLowerCase() ===
                                                        ""
                                                        ? soil
                                                        : soil.created_at.includes(
                                                              search
                                                          );
                                                })
                                                .sort(
                                                    (a, b) =>
                                                        a.created_at <
                                                        b.created_at
                                                )
                                                .map((soil, id) => (
                                                    <TableData.TableBodyRow
                                                        key={id}
                                                    >
                                                        <TableData.TableBodyData>
                                                            {myDate(
                                                                soil.created_at
                                                            ).getMonth() < 10
                                                                ? `0${
                                                                      myDate(
                                                                          soil.created_at
                                                                      ).getMonth() +
                                                                      1
                                                                  }-`
                                                                : `${
                                                                      myDate(
                                                                          soil.created_at
                                                                      ).getMonth() +
                                                                      1
                                                                  }`}
                                                            {myDate(
                                                                soil.created_at
                                                            ).getDate() < 10
                                                                ? `0${myDate(
                                                                      soil.created_at
                                                                  ).getDate()}-`
                                                                : `${myDate(
                                                                      soil.created_at
                                                                  ).getDate()}-`}
                                                            {myDate(
                                                                soil.created_at
                                                            ).getFullYear()}{" "}
                                                            {formatterTime.format(
                                                                myDate(
                                                                    soil.created_at
                                                                )
                                                            )}
                                                        </TableData.TableBodyData>
                                                        <TableData.TableBodyData>
                                                            {`${soil.temp_1}°C`}
                                                        </TableData.TableBodyData>
                                                        <TableData.TableBodyData>
                                                            {`${soil.hum_1} %`}
                                                        </TableData.TableBodyData>
                                                        <TableData.TableBodyData>
                                                            {`${soil.temp_2}°C`}
                                                        </TableData.TableBodyData>
                                                        <TableData.TableBodyData>
                                                            {`${soil.hum_2} %`}
                                                        </TableData.TableBodyData>
                                                    </TableData.TableBodyRow>
                                                ))
                                        ) : (
                                            <TableData.TableBodyRow>
                                                <TableData.TableBodyData>
                                                    <p className="text-red-primary">
                                                        Data tidak ditemukan
                                                    </p>
                                                </TableData.TableBodyData>
                                            </TableData.TableBodyRow>
                                        )
                                    ) : (
                                        <TableData.TableBodyRow>
                                            <TableData.TableBodyData>
                                                <p className="text-primary-text">
                                                    Loading Data ...
                                                </p>
                                            </TableData.TableBodyData>
                                        </TableData.TableBodyRow>
                                    )}
                                </TableData.TableBody>
                            </TableData>

                            <div
                                className={`${
                                    soilRT && soilRT.length > 0
                                        ? "flex"
                                        : "hidden"
                                } flex-col items-center my-4`}
                            >
                                <span className="text-sm text-gray-700 dark:text-gray-400">
                                    Showing{" "}
                                    <span className="font-semibold text-gray-900 dark:text-white">
                                        {currentPage}
                                    </span>{" "}
                                    to{" "}
                                    <span className="font-semibold text-gray-900 dark:text-white">
                                        {numbers.length}
                                    </span>{" "}
                                    of{" "}
                                    <span className="font-semibold text-gray-900 dark:text-white">
                                        {soilRT && soilRT.length}
                                    </span>{" "}
                                    Entries
                                </span>
                                <div
                                    className={`${
                                        soilRT && soilRT.length > 0
                                            ? "inline-flex"
                                            : "hidden"
                                    } mt-2 xs:mt-0`}
                                >
                                    {currentPage === numbers[0] ? (
                                        <button
                                            type="button"
                                            disabled
                                            className="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-600 rounded-s"
                                        >
                                            Prev
                                        </button>
                                    ) : (
                                        <button
                                            onClick={prePage}
                                            className="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900 "
                                        >
                                            Prev
                                        </button>
                                    )}

                                    {soilRT &&
                                    currentPage === numbers.length ? (
                                        <button
                                            type="button"
                                            disabled
                                            className="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-600 border-0 border-s border-gray-700 rounded-e"
                                        >
                                            Next
                                        </button>
                                    ) : (
                                        <button
                                            onClick={nextPage}
                                            className="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 border-0 border-s border-gray-700 rounded-e hover:bg-gray-900"
                                        >
                                            Next
                                        </button>
                                    )}
                                </div>
                            </div>

                            {/* <div className="flex justify-center items-center my-4">
                                <Paginator meta={dataSoil.meta} />
                            </div> */}
                            {/* Table md Breakpoint End */}
                        </div>
                    </div>
                </div>
            </div>
            {/* Soil Content End */}
        </div>
    );
}
