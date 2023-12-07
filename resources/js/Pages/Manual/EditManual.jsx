import { Head } from "@inertiajs/react";
import "/node_modules/flowbite/dist/flowbite.min.js";
import Sidebar from "@/Components/Sidebar";
import EditForm from "@/Components/Manual/EditForm";
import { toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";

export default function EditManual(props) {
    const {manual, title} = props;
    const handleNotifUpdate = () => toast.success("Data berhasil diupdate");
    
    return (
        <div>
            <Head title={title} />

            {/* Sidebar Start */}
            <Sidebar />
            {/* Sidebar End */}

            {/* Manual Content Start */}
            <div className="p-2 sm:ml-64">
                <div className="p-1 mt-14">
                    <div className="w-full bg-white p-3 rounded-lg md:rounded-xl">
                        <div className="flex items-center justify-between">
                            <div className="flex flex-col justify-center items-start">
                                <h1 className="text-lg md:text-2xl font-extrabold text-primary-text text-start">
                                    Update Manual Setting
                                </h1>
                                <p className="text-start">
                                    <small className="text-[#A3A4A8]">
                                        Edit pengaturan yang diinginkan
                                    </small>
                                </p>
                            </div>
                        </div>

                        <div className="my-4">
                            {manual && (
                                <EditForm
                                    manual={manual}
                                    handleNotifUpdate={handleNotifUpdate}
                                />
                            )}
                        </div>
                    </div>
                </div>
            </div>
            {/* Manual Content End */}
        </div>
    );
}
