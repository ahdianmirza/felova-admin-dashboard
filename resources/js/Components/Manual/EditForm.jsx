"use client";

import { router } from "@inertiajs/react";
import { Button, Label, TextInput, ToggleSwitch } from "flowbite-react";
import { useState } from "react";

const EditForm = (props) => {
    const {manual} = props;
    const [device, setDevice] = useState(manual.device);
    const [pompa, setPompa] = useState(manual.pompa);
    const [sol_1, setSol1] = useState(manual.sol_1);
    const [sol_2, setSol2] = useState(manual.sol_2);
    const [sol_3, setSol3] = useState(manual.sol_3);
    const [sol_4, setSol4] = useState(manual.sol_4);
    const [isNotif, setIsNotif] = useState(false);

    const handleSubmit = () => {
        const data = { id: manual.id, device, pompa, sol_1, sol_2, sol_3, sol_4 };
        router.put(route('manual.update', manual.id), data);
    };

    const handleDisabledButton = () => {
        if (device == "") {
            return true;
        } else {
            return false;
        }
    };

    return (
        <form className="flex flex-col gap-4">
            <div>
                <div className="mb-2 block">
                    <Label htmlFor="device" value="Device" />
                </div>
                <TextInput
                    id="device"
                    type="text"
                    placeholder="Masukkan nama device"
                    defaultValue={manual.device}
                    onChange={(device) => setDevice(device.target.value)}
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
            <Button
                onClick={() => handleSubmit()}
                disabled={handleDisabledButton()}
                className="w-full bg-primary hover:bg-primary-hover focus:ring-primary-hover enabled:hover:bg-primary-focus focus:bg-primary-focus"
            >
                Edit
            </Button>
        </form>
    );
}
export default EditForm;