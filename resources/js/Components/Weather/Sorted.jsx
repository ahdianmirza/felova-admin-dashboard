import { useState } from "react";
import { router } from "@inertiajs/react";

const Sorted = () => {
    const [sort, setSort] = useState();
    const [probabilitas, setProbabilitas] = useState();

    const handleSort = () => {
        const data = {
            sort,
            probabilitas,
        };
        router.get(route("index.weather"), data);
        setSort(data.sort);
    };

    return (
        <div className="mb-4 flex flex-wrap items-center gap-2">
            <h2 className="font-semibold">Sortir : </h2>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setSort("asc")}
                name="sort"
                value={sort}
                className="bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Terlama
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setSort("desc")}
                name="sort"
                value={sort}
                className="bg-green-100 hover:bg-green-200 text-green-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Terbaru
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setProbabilitas("Cerah")}
                name="probabilitas"
                value={probabilitas}
                class="bg-yellow-100 hover:bg-yellow-200 text-yellow-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Cerah
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setProbabilitas("Berawan")}
                name="probabilitas"
                value={probabilitas}
                className="bg-indigo-100 hover:bg-indigo-200 text-indigo-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Berawan
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setProbabilitas("Hujan")}
                name="probabilitas"
                value={probabilitas}
                className="bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Hujan
            </button>
        </div>
    );
};
export default Sorted;
