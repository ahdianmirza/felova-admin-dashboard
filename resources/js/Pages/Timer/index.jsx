import Sidebar from "@/Components/Sidebar";
import DataCard from "@/Components/Timer/DataCard";
import ModalForm from "@/Components/Timer/ModalForm";
import { Head, router } from "@inertiajs/react";
import { ToastContainer, toast } from "react-toastify";

export default function Timer(props) {
    const { title, dataTimer, dataDevice } = props;
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

            {/* Manual Content Start */}
            <div className="p-2 sm:ml-64">
                <div className="p-1 mt-14">
                    <div className="w-full bg-white p-3">
                        <div className="flex items-center justify-between">
                            <div className="flex flex-col justify-center items-start">
                                <h1 className="text-lg md:text-2xl font-extrabold text-primary-text text-start">
                                    Timer Setting Lists
                                </h1>
                                <p className="text-start">
                                    <span className="text-sm font-bold text-primary-text">
                                        {dataTimer.length} total,
                                    </span>{" "}
                                    <small className="text-[#A3A4A8]">
                                        proceed to resolve them
                                    </small>
                                </p>
                            </div>

                            {/* Tambah Data */}
                            <div className="mr-2">
                                <ModalForm dataDevice={dataDevice} />
                            </div>
                        </div>

                        <div className="my-5">
                            {/* Data Timer Mobile Start */}
                            {dataTimer && dataTimer.length > 0 ? (
                                dataTimer.map((timer, id) => (
                                    <DataCard key={id}>
                                        <DataCard.Header>
                                            {timer.device.name}
                                        </DataCard.Header>
                                        <DataCard.Body>
                                            <p className="font-normal text-start text-primary-text">
                                                Hari : {timer.hari}
                                            </p>
                                            <p className="font-normal text-start text-primary-text">
                                                No. Jadwal : {timer.noJadwal}
                                            </p>
                                            <p className="font-normal text-start text-primary-text">
                                                Waktu Mulai :{" "}
                                                {`${timer.jam}:${timer.menit}`}
                                            </p>
                                        </DataCard.Body>
                                        <DataCard.Action
                                            timer={timer}
                                            handleDeleteNotif={() =>
                                                handleDeleteNotif()
                                            }
                                        />
                                    </DataCard>
                                ))
                            ) : (
                                <p className="text-red-primary md:hidden">
                                    Data tidak ditemukan
                                </p>
                            )}
                            {/* Data Timer Mobile End */}
                        </div>
                    </div>
                </div>
            </div>
            {/* Manual Content End */}
        </div>
    );
}
