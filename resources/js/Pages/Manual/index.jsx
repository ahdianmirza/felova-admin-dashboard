import { Link, Head } from "@inertiajs/react";
import MenuList from "@/Components/Sidebar/MenuList";
import "/node_modules/flowbite/dist/flowbite.min.js";
import DataCard from "@/Components/Manual/DataCard";
import IndicatorOn from "@/Components/Manual/IndicatorOn";
import IndicatorOff from "@/Components/Manual/IndicatorOff";

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
                            <a
                                href="https://flowbite.com"
                                className="flex ms-2 md:me-24"
                            >
                                <img
                                    src="https://flowbite.com/docs/images/logo.svg"
                                    className="h-8 me-3"
                                    alt="FlowBite Logo"
                                />
                                <span className="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">
                                    Flowbite
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <aside
                id="logo-sidebar"
                className="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-primary border-r sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
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
                            <div className="relative overflow-x-auto shadow-md sm:rounded-lg hidden md:block">
                                <table className="border-collapse w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th
                                                scope="col"
                                                className="px-6 py-3"
                                            >
                                                <div className="flex items-center">
                                                    Device
                                                    <a href="#">
                                                        <svg
                                                            className="w-3 h-3 ms-1.5"
                                                            aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor"
                                                            viewBox="0 0 24 24"
                                                        >
                                                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </th>
                                            <th
                                                scope="col"
                                                className="px-6 py-3"
                                            >
                                                Pompa
                                            </th>
                                            <th
                                                scope="col"
                                                className="px-6 py-3"
                                            >
                                                Solenoid
                                            </th>
                                            <th
                                                scope="col"
                                                className="px-6 py-3"
                                            >
                                                <p className="hidden md:block">
                                                    Action
                                                </p>
                                            </th>
                                            <th
                                                scope="col"
                                                className="flex md:hidden px-6 py-3"
                                            >
                                                Detail
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {dataManual &&
                                            dataManual.map((manual, id) => (
                                                <tr
                                                    className="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                                    key={id}
                                                >
                                                    <th
                                                        scope="row"
                                                        className="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                                    >
                                                        {manual.device}
                                                    </th>
                                                    <td className="px-6 py-4">
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
                                                    </td>
                                                    <td className="px-6 py-4">
                                                        <div className="flex flex-wrap items-center md:gap-y-5 md:gap-x-2">
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
                                                        </div>
                                                    </td>
                                                    <td className="px-6 py-4">
                                                        <div className="flex items-center gap-x-2">
                                                            {/* Update */}
                                                            <a
                                                                href=""
                                                                className="bg-[#b2ede5] hover:bg-[#70d8ce] font-medium rounded-lg text-sm px-3 py-2 text-center text-[#01875d]"
                                                            >
                                                                <svg
                                                                    width="24"
                                                                    height="24"
                                                                    fill="none"
                                                                    viewBox="0 0 24 24"
                                                                >
                                                                    <path
                                                                        stroke="currentColor"
                                                                        strokeLinecap="round"
                                                                        strokeLinejoin="round"
                                                                        strokeWidth="1.5"
                                                                        d="M4.75 19.25L9 18.25L18.2929 8.95711C18.6834 8.56658 18.6834 7.93342 18.2929 7.54289L16.4571 5.70711C16.0666 5.31658 15.4334 5.31658 15.0429 5.70711L5.75 15L4.75 19.25Z"
                                                                    ></path>
                                                                    <path
                                                                        stroke="currentColor"
                                                                        strokeLinecap="round"
                                                                        strokeLinejoin="round"
                                                                        strokeWidth="1.5"
                                                                        d="M19.25 19.25H13.75"
                                                                    ></path>
                                                                </svg>
                                                            </a>

                                                            {/* Delete */}
                                                            <div className="bg-[#ffd6ed] hover:bg-[#ffa1d4] font-medium rounded-lg text-sm px-3 py-1.5 text-center text-[#bf3056]">
                                                                <form
                                                                    action="#"
                                                                    method="post"
                                                                >
                                                                    <button className="stroke-current text-[#bf3056]">
                                                                        <svg
                                                                            width="24"
                                                                            height="24"
                                                                            fill="none"
                                                                            viewBox="0 0 24 24"
                                                                        >
                                                                            <path
                                                                                stroke="currentColor"
                                                                                strokeLinecap="round"
                                                                                strokeLinejoin="round"
                                                                                strokeWidth="1.5"
                                                                                d="M6.75 7.75L7.59115 17.4233C7.68102 18.4568 8.54622 19.25 9.58363 19.25H14.4164C15.4538 19.25 16.319 18.4568 16.4088 17.4233L17.25 7.75"
                                                                            ></path>
                                                                            <path
                                                                                stroke="currentColor"
                                                                                strokeLinecap="round"
                                                                                strokeLinejoin="round"
                                                                                strokeWidth="1.5"
                                                                                d="M9.75 7.5V6.75C9.75 5.64543 10.6454 4.75 11.75 4.75H12.25C13.3546 4.75 14.25 5.64543 14.25 6.75V7.5"
                                                                            ></path>
                                                                            <path
                                                                                stroke="currentColor"
                                                                                strokeLinecap="round"
                                                                                strokeLinejoin="round"
                                                                                strokeWidth="1.5"
                                                                                d="M5 7.75H19"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ))}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {/* Manual Content End */}
        </div>
    );
    }
