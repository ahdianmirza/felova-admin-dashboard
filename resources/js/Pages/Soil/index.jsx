import Sidebar from "@/Components/Sidebar";
import Paginator from "@/Components/Soil/Paginator";
import TableData from "@/Components/Soil/TableData";
import { Head } from "@inertiajs/react";
import { ToastContainer, toast } from "react-toastify";

export default function Timer(props) {
    const { title, dataSoil, dataSoilSum } = props;
    const myDate = (date) => {
        return new Date(date);
    }
    const formatterTime = new Intl.DateTimeFormat("en-US", {
        hour: "2-digit",
        minute: "2-digit",
        hour12: false
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
            <Sidebar />
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
                                        {dataSoil.meta.total} data,
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

                            {/* Table md Breakpoint Start */}
                            <TableData>
                                <TableData.TableHead>
                                    <TableData.TableHeadTitle>
                                        <TableData.SortedTitle>
                                            Waktu
                                        </TableData.SortedTitle>
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Suhu 1
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Suhu 2
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Kelembapan 1
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Kelembapan 2
                                    </TableData.TableHeadTitle>
                                </TableData.TableHead>
                                <TableData.TableBody>
                                    {dataSoil.data && dataSoil.data.length > 0 ? (
                                        dataSoil.data.map((soil, id) => (
                                            <TableData.TableBodyRow key={id}>
                                                <TableData.TableBodyData>
                                                    {/* {my_date_format(
                                                        soil.created_at
                                                    )} */}
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
                                                    ).getMonth() < 10
                                                        ? `0${
                                                              myDate(
                                                                  soil.created_at
                                                              ).getMonth() + 1
                                                          }-`
                                                        : `${
                                                              myDate(
                                                                  soil.created_at
                                                              ).getMonth() + 1
                                                          }`}
                                                    {myDate(
                                                        soil.created_at
                                                    ).getFullYear()}{" "}
                                                    {formatterTime.format(
                                                        myDate(soil.created_at)
                                                    )}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {`${soil.temp_1}°C`}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {`${soil.temp_2}°C`}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {`${soil.hum_1} %`}
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
                                    )}
                                </TableData.TableBody>
                            </TableData>

                            <div className="flex justify-center items-center my-4">
                                <Paginator meta={dataSoil.meta} />
                            </div>
                            {/* Table md Breakpoint End */}
                        </div>
                    </div>
                </div>
            </div>
            {/* Soil Content End */}
        </div>
    );
}
