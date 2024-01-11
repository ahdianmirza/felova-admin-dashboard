import React from 'react'
import { Link } from "@inertiajs/react";
import 'flowbite';

export default function MenuItem({ children, menuLink }) {
    return (
        <div>
            <li>
                <Link
                    href={menuLink}
                    as="button"
                    className="w-full flex items-center p-2 text-white rounded-lg hover:bg-primary-hover dark:hover:bg-gray-700 group"
                >
                    {children}
                </Link>
            </li>
        </div>
    );
}

const MenuText = ({children}) => {
    return (
        <div>
            <span className="ms-3">{children}</span>
        </div>
    );
};

const MenuIcon = ({ children }) => {
    return (
        <div>
            {children}
        </div>
    );
};

MenuItem.MenuText = MenuText;
MenuItem.MenuIcon = MenuIcon;