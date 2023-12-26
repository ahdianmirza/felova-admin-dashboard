"use client";

import { toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";
import { router } from "@inertiajs/react";
import { Button, Label, Modal, TextInput, ToggleSwitch } from "flowbite-react";
import { useState } from "react";

const ModalForm = (props) => {
    const {
        dataManual
    } = props;

    const toastNotifCreate = new Promise((resolve) =>
        setTimeout(() => resolve("Pengaturan berhasil ditambahkan"), 1000)
    );

    const [openModal, setOpenModal] = useState(false);
    const [device, setDevice] = useState("");
    const [pompa, setPompa] = useState(false);
    const [sol_1, setSol1] = useState(false);
    const [sol_2, setSol2] = useState(false);
    const [sol_3, setSol3] = useState(false);
    const [sol_4, setSol4] = useState(false);

    const handleSubmit = () => {
        const data = { device, pompa, sol_1, sol_2, sol_3, sol_4 };
        router.post(route("manual.store"), data);
        toast.promise(toastNotifCreate, {
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
        setDevice("");
        setPompa(false);
        setSol1(false);
        setSol2(false);
        setSol3(false);
        setSol4(false);
    };

    const handleDisabledButton = () => {
        let sameDevice;

        dataManual.map((manual) => {
            if (manual.device == device) {
                sameDevice = manual.device;
            }
        })

        if (device == "") {
            return true;
        } else if (device == sameDevice) {
            return true;
        } else {
            return false;
        }
    }

    return (
        <>
            <Button
                className="bg-primary hover:bg-primary-hover focus:ring-primary-hover enabled:hover:bg-primary-focus"
                onClick={() => setOpenModal(true)}
            >
                Tambah
            </Button>

            <Modal
                dismissible
                show={openModal}
                onClose={() => setOpenModal(false)}
                popup
            >
                <Modal.Header />
                <Modal.Body>
                    <div className="space-y-6">
                        <h3 className="text-xl font-medium text-gray-900 dark:text-white">
                            Tambah Pengaturan Manual
                        </h3>
                        <div>
                            <div className="mb-2 block">
                                <Label htmlFor="device" value="Device" />
                            </div>
                            <TextInput
                                id="device"
                                placeholder="Masukkan nama device"
                                value={device}
                                onChange={(device) =>
                                    setDevice(device.target.value)
                                }
                                required
                            />
                        </div>
                        <div className="flex flex-col gap-y-4">
                            <ToggleSwitch
                                checked={pompa}
                                label="Pompa"
                                onChange={setPompa}
                            />
                            <ToggleSwitch
                                checked={sol_1}
                                label="Solenoid 1"
                                onChange={setSol1}
                            />
                            <ToggleSwitch
                                checked={sol_2}
                                label="Solenoid 2"
                                onChange={setSol2}
                            />
                            <ToggleSwitch
                                checked={sol_3}
                                label="Solenoid 3"
                                onChange={setSol3}
                            />
                            <ToggleSwitch
                                checked={sol_4}
                                label="Solenoid 4"
                                onChange={setSol4}
                            />
                        </div>
                        <div className="w-full">
                            <Button
                                onClick={() => handleSubmit()}
                                disabled={handleDisabledButton()}
                                className="w-full bg-primary hover:bg-primary-hover focus:ring-primary-hover enabled:hover:bg-primary-focus focus:bg-primary-focus"
                            >
                                Tambah
                            </Button>
                        </div>
                    </div>
                </Modal.Body>
            </Modal>
        </>
    );
}
export default ModalForm;