import { useState } from "react";
import { router } from "@inertiajs/react";

const Sorted = () => {
    const [sort, setSort] = useState();
    const [probabilitas, setProbabilitas] = useState();

    const handleSort = () => {
        const data = {
            sort,
            probabilitas
        };
        router.get(route("index.weather"), data);
        setSort(data.sort);
    };

    return (
        <div className="mb-4 flex items-center gap-x-2">
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

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setProbabilitas("Cerah")}
                name="probabilitas"
                value={probabilitas}
                className="text-white bg-primary hover:bg-primary-hover focus:ring-4 focus:outline-none focus:ring-primary-focus font-medium rounded-lg text-sm px-4 py-2"
            >
                Cerah
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setProbabilitas("Berawan")}
                name="probabilitas"
                value={probabilitas}
                className="text-white bg-primary hover:bg-primary-hover focus:ring-4 focus:outline-none focus:ring-primary-focus font-medium rounded-lg text-sm px-4 py-2"
            >
                Berawan
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setProbabilitas("Hujan")}
                name="probabilitas"
                value={probabilitas}
                className="text-white bg-primary hover:bg-primary-hover focus:ring-4 focus:outline-none focus:ring-primary-focus font-medium rounded-lg text-sm px-4 py-2"
            >
                Hujan
            </button>
        </div>
    );
};
export default Sorted;
