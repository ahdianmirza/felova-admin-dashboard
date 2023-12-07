import { Head, router } from "@inertiajs/react";
import "/node_modules/flowbite/dist/flowbite.min.js";
import DataCard from "@/Components/Manual/DataCard";
import IndicatorOn from "@/Components/Manual/IndicatorOn";
import IndicatorOff from "@/Components/Manual/IndicatorOff";
import TableData from "@/Components/Manual/TableData";
import Sidebar from "@/Components/Sidebar";
import ModalForm from "@/Components/ModalForm";
import { ToastContainer, toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";
import { useEffect } from "react";

export default function Manual(props) {
    const {title, dataManual} = props;
    const toastNotifDelete = new Promise((resolve) => setTimeout(() => resolve("Pengaturan berhasil dihapus"), 2000));

    useEffect(() => {
        if (!dataManual) {
            router.get('/manual');
        }
    }, []);

    const handleDeleteNotif = () => {
        toast.promise(toastNotifDelete, {
            pending: {
                render() {
                    return "Loading";
                },
                icon: "🚀"
            },
            success: {
                render({ data }) {
                    return data;
                },
                icon: "🟢"
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
                                    Manual Setting Lists
                                </h1>
                                <p className="text-start">
                                    <span className="text-sm font-bold text-primary-text">
                                        {dataManual.length} total,
                                    </span>{" "}
                                    <small className="text-[#A3A4A8]">
                                        proceed to resolve them
                                    </small>
                                </p>
                            </div>

                            {/* Tambah Data */}
                            <div className="mr-2">
                                <ModalForm
                                    dataManual={dataManual}
                                />
                            </div>
                        </div>

                        <div className="my-5">
                            {/* Data Manual Mobile */}
                            {dataManual && dataManual.length > 0 ? (
                                dataManual.map((manual, id) => (
                                    <DataCard key={id}>
                                        <DataCard.Header>
                                            {manual.device}
                                        </DataCard.Header>
                                        <DataCard.PompaBody pompaText="Pompa :">
                                            {manual.pompa == 1 && (
                                                <IndicatorOn>ON</IndicatorOn>
                                            )}
                                            {manual.pompa == 0 && (
                                                <IndicatorOff>OFF</IndicatorOff>
                                            )}
                                        </DataCard.PompaBody>
                                        <DataCard.SolenoidBody solenoidText="Solenoid">
                                            {manual.sol_1 == 1 && (
                                                <IndicatorOn>1. ON</IndicatorOn>
                                            )}
                                            {manual.sol_1 == 0 && (
                                                <IndicatorOff>
                                                    1. OFF
                                                </IndicatorOff>
                                            )}
                                            {manual.sol_2 == 1 && (
                                                <IndicatorOn>2. ON</IndicatorOn>
                                            )}
                                            {manual.sol_2 == 0 && (
                                                <IndicatorOff>
                                                    2. OFF
                                                </IndicatorOff>
                                            )}
                                            {manual.sol_3 == 1 && (
                                                <IndicatorOn>3. ON</IndicatorOn>
                                            )}
                                            {manual.sol_3 == 0 && (
                                                <IndicatorOff>
                                                    3. OFF
                                                </IndicatorOff>
                                            )}
                                            {manual.sol_4 == 1 && (
                                                <IndicatorOn>4. ON</IndicatorOn>
                                            )}
                                            {manual.sol_4 == 0 && (
                                                <IndicatorOff>
                                                    4. OFF
                                                </IndicatorOff>
                                            )}
                                        </DataCard.SolenoidBody>
                                        <DataCard.ActionManual
                                            editLink={route("manual.edit", {
                                                id: manual.id,
                                            })}
                                            as="button"
                                            methodEdit="get"
                                            data={{ id: manual.id }}
                                            deleteLink={route(
                                                "manual.destroy",
                                                {
                                                    id: manual.id,
                                                }
                                            )}
                                            methodDelete="delete"
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
                            {/* Data Manual Mobile */}

                            {/* Table md Breakpoint */}
                            <TableData>
                                <TableData.TableHead>
                                    <TableData.TableHeadTitle>
                                        <TableData.SortedTitle>
                                            Device
                                        </TableData.SortedTitle>
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Pompa
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Solenoid
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Aksi
                                    </TableData.TableHeadTitle>
                                </TableData.TableHead>

                                <TableData.TableBody>
                                    {dataManual && dataManual.length > 0 ? (
                                        dataManual.map((manual, id) => (
                                            <TableData.TableBodyRow key={id}>
                                                <TableData.TableBodyData>
                                                    {manual.device}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {manual.pompa == 1 && (
                                                        <IndicatorOn>
                                                            ON
                                                        </IndicatorOn>
                                                    )}
                                                    {manual.pompa == 0 && (
                                                        <IndicatorOff>
                                                            OFF
                                                        </IndicatorOff>
                                                    )}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {manual.sol_1 == 1 && (
                                                        <IndicatorOn>
                                                            1. ON
                                                        </IndicatorOn>
                                                    )}
                                                    {manual.sol_1 == 0 && (
                                                        <IndicatorOff>
                                                            1. OFF
                                                        </IndicatorOff>
                                                    )}

                                                    {manual.sol_2 == 1 && (
                                                        <IndicatorOn>
                                                            2. ON
                                                        </IndicatorOn>
                                                    )}
                                                    {manual.sol_2 == 0 && (
                                                        <IndicatorOff>
                                                            2. OFF
                                                        </IndicatorOff>
                                                    )}

                                                    {manual.sol_3 == 1 && (
                                                        <IndicatorOn>
                                                            3. ON
                                                        </IndicatorOn>
                                                    )}
                                                    {manual.sol_3 == 0 && (
                                                        <IndicatorOff>
                                                            3. OFF
                                                        </IndicatorOff>
                                                    )}

                                                    {manual.sol_4 == 1 && (
                                                        <IndicatorOn>
                                                            4. ON
                                                        </IndicatorOn>
                                                    )}
                                                    {manual.sol_4 == 0 && (
                                                        <IndicatorOff>
                                                            4. OFF
                                                        </IndicatorOff>
                                                    )}
                                                </TableData.TableBodyData>

                                                <TableData.TableBodyData>
                                                    <TableData.ActionManual
                                                        editLink={route(
                                                            "manual.edit",
                                                            {
                                                                id: manual.id,
                                                            }
                                                        )}
                                                        as="button"
                                                        method="get"
                                                        data={{ id: manual.id }}
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
                        </div>
                    </div>
                </div>
            </div>
            {/* Manual Content End */}
        </div>
    );
    }
