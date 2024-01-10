import Sidebar from "@/Components/Sidebar";
import Paginator from "@/Components/Weather/Paginator";
import SearchBar from "@/Components/Weather/SearchBar";
import Sorted from "@/Components/Weather/Sorted";
import TableData from "@/Components/Weather/TableData";
import { Head } from "@inertiajs/react";
import { ToastContainer, toast } from "react-toastify";

export default function Weather(props) {
    const { title, dataWeather } = props;
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
            <Sidebar />
            {/* Sidebar End */}

            {/* weather Content Start */}
            <div className="p-2 sm:ml-64">
                <div className="p-1 mt-14">
                    <div className="w-full bg-white p-3">
                        <div className="flex items-center justify-between">
                            <div className="flex flex-col justify-center items-start">
                                <h1 className="text-lg md:text-2xl font-extrabold text-primary-text text-start">
                                    Menu Weather Station
                                </h1>
                                <p className="text-start">
                                    <span className="text-sm font-bold text-primary-text">
                                        {dataWeather.meta.total} data,
                                    </span>{" "}
                                    <small className="text-[#A3A4A8]">
                                        hasil monitoring cuaca
                                    </small>
                                </p>
                            </div>
                        </div>

                        <div className="my-5">
                            {/* Data Timer Mobile Start */}

                            {/* Data Timer Mobile End */}

                            <SearchBar />
                            <Sorted />

                            {/* Table md Breakpoint Start */}
                            <TableData>
                                <TableData.TableHead>
                                    <TableData.TableHeadTitle>
                                        Waktu
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Curah Hujan
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Probabilitas
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Kecepatan Angin
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Suhu
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Kelembapan
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Intensitas Cahaya
                                    </TableData.TableHeadTitle>
                                </TableData.TableHead>

                                <TableData.TableBody>
                                    {dataWeather.data &&
                                    dataWeather.data.length > 0 ? (
                                        dataWeather.data.map((weather, id) => (
                                            <TableData.TableBodyRow key={id}>
                                                <TableData.TableBodyData>
                                                    {myDate(
                                                        weather.created_at
                                                    ).getDate() < 10
                                                        ? `0${myDate(
                                                              weather.created_at
                                                          ).getDate()}-`
                                                        : `${myDate(
                                                              weather.created_at
                                                          ).getDate()}-`}
                                                    {myDate(
                                                        weather.created_at
                                                    ).getMonth() < 10
                                                        ? `0${
                                                              myDate(
                                                                  weather.created_at
                                                              ).getMonth() + 1
                                                          }-`
                                                        : `${
                                                              myDate(
                                                                  weather.created_at
                                                              ).getMonth() + 1
                                                          }`}
                                                    {myDate(
                                                        weather.created_at
                                                    ).getFullYear()}{" "}
                                                    {formatterTime.format(
                                                        myDate(weather.created_at)
                                                    )}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {`${weather.curahHujan} mm`}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {weather.probabilitas}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {`${weather.kecepatanAngin} m/s`}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {`${weather.suhuUdara}°C`}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {`${weather.kelembapanUdara}%`}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {`${weather.intensitasCahaya} lux`}
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
                                <Paginator meta={dataWeather.meta} />
                            </div>
                            {/* Table md Breakpoint End */}
                        </div>
                    </div>
                </div>
            </div>
            {/* weather Content End */}
        </div>
    );
}