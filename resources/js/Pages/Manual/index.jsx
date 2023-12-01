import { Link, Head } from "@inertiajs/react";
import MenuList from "@/Components/Sidebar/MenuList";
import "/node_modules/flowbite/dist/flowbite.min.js";
import DataCard from "@/Components/Manual/DataCard";
import IndicatorOn from "@/Components/Manual/IndicatorOn";
import IndicatorOff from "@/Components/Manual/IndicatorOff";
import TableData from "@/Components/Manual/TableData";

export default function index({title, dataManual}) {
    return (
        <div>
            <Head title={title} />
            <nav className="fixed top-0 z-50 w-full bg-nav-bg border-b dark:bg-gray-800 dark:border-gray-700">
                <div className="px-3 py-3 lg:px-5 lg:pl-3">
                    <div className="flex items-center justify-between">
                        <div className="flex items-center justify-start rtl:justify-end">
                            <button
                                data-drawer-target="logo-sidebar"
                                data-drawer-toggle="logo-sidebar"
                                aria-controls="logo-sidebar"
                                type="button"
                                className="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            >
                                <span className="sr-only">Open sidebar</span>
                                <svg
                                    className="w-6 h-6"
                                    aria-hidden="true"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        clipRule="evenodd"
                                        fillRule="evenodd"
                                        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
                                    ></path>
                                </svg>
                            </button>
                            <a href="/" className="flex ms-2 md:me-24">
                                <img
                                    src="img/morf-vanili.png"
                                    alt="Logo Vanili"
                                    className="h-8 mr-3"
                                ></img>
                                <span className="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">
                                    Felova
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <aside
                id="logo-sidebar"
                className="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-primary sm:translate-x-0"
                aria-label="Sidebar"
            >
                <MenuList />
            </aside>

            {/* Manual Content Start */}
            <div className="p-2 sm:ml-64">
                <div className="p-1 mt-14">
                    <div className="w-full bg-white p-3 rounded-lg md:rounded-xl shadow-md md:shadow-md">
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

                            <div className="mr-2">
                                <a
                                    href="/admin/manual/create"
                                    className="text-white bg-primary hover:bg-primary-hover font-medium rounded-xl text-sm md:text-base px-3 py-2 md:px-5 md:py-2.5"
                                >
                                    Tambah
                                </a>
                            </div>
                        </div>

                        <div className="my-5">
                            {/* Data Manual Mobile */}
                            {dataManual.map((manual, id) => (
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
                                            <IndicatorOff>1. OFF</IndicatorOff>
                                        )}
                                        {manual.sol_2 == 1 && (
                                            <IndicatorOn>2. ON</IndicatorOn>
                                        )}
                                        {manual.sol_2 == 0 && (
                                            <IndicatorOff>2. OFF</IndicatorOff>
                                        )}
                                        {manual.sol_3 == 1 && (
                                            <IndicatorOn>3. ON</IndicatorOn>
                                        )}
                                        {manual.sol_3 == 0 && (
                                            <IndicatorOff>3. OFF</IndicatorOff>
                                        )}
                                        {manual.sol_4 == 1 && (
                                            <IndicatorOn>4. ON</IndicatorOn>
                                        )}
                                        {manual.sol_4 == 0 && (
                                            <IndicatorOff>4. OFF</IndicatorOff>
                                        )}
                                    </DataCard.SolenoidBody>
                                    <DataCard.ActionManual
                                        editLink="#"
                                        deleteAction="#"
                                    />
                                </DataCard>
                            ))}
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
                                    {dataManual &&
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
                                                    <TableData.ActionManual/>
                                                </TableData.TableBodyData>
                                            </TableData.TableBodyRow>
                                        ))}
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
