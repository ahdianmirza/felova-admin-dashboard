import ModalForm from "@/Components/Device/ModalForm";
import TableData from "@/Components/Device/TableData";
import Sidebar from "@/Components/Sidebar";
import { Head, router } from "@inertiajs/react";
import { ToastContainer, toast } from "react-toastify";

export default function Device(props) {
    const { title, dataDevice } = props;

    const toastNotifDelete = new Promise((resolve) =>
        setTimeout(() => resolve("Pengaturan berhasil dihapus"), 2000)
    );

    const handleDeleteNotif = () => {
        toast.promise(toastNotifDelete, {
            pending: {
                render() {
                    return "Loading";
                },
                icon: "🚀",
            },
            success: {
                render({ data }) {
                    return data;
                },
                icon: "🟢",
            },
            error: {
                render({ data }) {
                    return <MyErrorComponent message={data.message} />;
                },
            },
        });
    };

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

            {/* Device Content Start */}
            <div className="p-2 sm:ml-64">
                <div className="p-1 mt-14">
                    <div className="w-full bg-white p-3">
                        <div className="flex items-center justify-between">
                            <div className="flex flex-col justify-center items-start">
                                <h1 className="text-lg md:text-2xl font-extrabold text-primary-text text-start">
                                    Daftar Pengaturan Device
                                </h1>
                                <p className="text-start">
                                    <span className="text-sm font-bold text-primary-text">
                                        {dataDevice.length} unit,
                                    </span>{" "}
                                    <small className="text-[#A3A4A8]">
                                        device aktif yang sedang digunakan
                                    </small>
                                </p>
                            </div>

                            {/* Tambah Data */}
                            <div className="mr-2">
                                <ModalForm dataDevice={dataDevice} />
                            </div>
                        </div>

                        <div className="my-5">
                            {/* Data Device Mobile Start */}

                            {/* Data Device Mobile End */}

                            {/* Table md Breakpoint Start */}
                            <TableData>
                                <TableData.TableHead>
                                    <TableData.TableHeadTitle>
                                        <TableData.SortedTitle>
                                            Nama Device
                                        </TableData.SortedTitle>
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Aksi
                                    </TableData.TableHeadTitle>
                                </TableData.TableHead>

                                <TableData.TableBody>
                                    {dataDevice && dataDevice.length > 0 ? (
                                        dataDevice.map((device, id) => (
                                            <TableData.TableBodyRow key={id}>
                                                <TableData.TableBodyData>
                                                    {device.name}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    <TableData.ActionDevice
                                                        device={device}
                                                        handleDeleteNotif={() =>
                                                            handleDeleteNotif()
                                                        }
                                                    />
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
                            {/* Table md Breakpoint End */}
                        </div>
                    </div>
                </div>
            </div>
            {/* Device Content End */}
        </div>
    );
}