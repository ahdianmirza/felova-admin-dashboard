import ModalForm from "@/Components/Device/ModalForm";
import Sidebar from "@/Components/Sidebar";
import { Head, router } from "@inertiajs/react";
import { ToastContainer, toast } from "react-toastify";

export default function Device(props) {
    const { title, dataDevice } = props;
    console.info("props: ", dataDevice);

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
                                    Device Setting Lists
                                </h1>
                                <p className="text-start">
                                    <span className="text-sm font-bold text-primary-text">
                                        {dataDevice && dataDevice.length > 0 ? `${dataDevice.length} total` : "No data found"},
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
                            {/* Data Device Mobile Start */}
                            
                            {/* Data Device Mobile End */}

                            {/* Table md Breakpoint Start */}
                            
                            {/* Table md Breakpoint End */}
                        </div>
                    </div>
                </div>
            </div>
            {/* Device Content End */}
        </div>
    );
}