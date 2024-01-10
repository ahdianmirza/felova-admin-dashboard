import { useState } from "react";
import { router } from "@inertiajs/react";

const Sorted = () => {
    const [sort, setSort] = useState();

    
    const handleSort = () => {
        const data = {
            sort
        };
        router.get(route("index.soil"), data);
        setSort(data.sort);
    }

    return (
        <div className="mb-4 flex flex-wrap items-center gap-2">
            <h2 className="font-semibold">Sortir : </h2>
            <button
                onClick={() => handleSort()}
                onMouseDown={() => setSort("asc")}
                name="sort"
                value={sort}
                className="text-white bg-primary hover:bg-primary-hover focus:ring-4 focus:outline-none focus:ring-primary-focus font-medium rounded-lg text-sm px-4 py-2"
            >
                Terlama
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setSort("desc")}
                name="sort"
                value={sort}
                className="text-white bg-primary hover:bg-primary-hover focus:ring-4 focus:outline-none focus:ring-primary-focus font-medium rounded-lg text-sm px-4 py-2"
            >
                Terbaru
            </button>
        </div>
    );
}
export default Sorted;