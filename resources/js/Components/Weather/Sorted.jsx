import { useState } from "react";
import { router } from "@inertiajs/react";

const Sorted = ({user}) => {
    const [sort, setSort] = useState();
    const [probabilitas, setProbabilitas] = useState();

    const handleSort = () => {
        const data = {
            sort,
            probabilitas,
        };
        if (!user) {
            router.get(route("index.weather.guest"), data);
        } else {
            router.get(route("index.weather"), data);
        }
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
                onMouseDown={() => setProbabilitas("Berawan")}
                name="probabilitas"
                value={probabilitas}
                className="bg-indigo-100 hover:bg-indigo-200 text-indigo-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Berawan
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setProbabilitas("Hujan Ringan")}
                name="probabilitas"
                value={probabilitas}
                className="bg-yellow-100 text-yellow-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Hujan Ringan
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setProbabilitas("Hujan Sedang")}
                name="probabilitas"
                value={probabilitas}
                className="bg-gray-100 text-gray-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Hujan Sedang
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setProbabilitas("Hujan Lebat")}
                name="probabilitas"
                value={probabilitas}
                className="bg-purple-100 text-purple-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Hujan Lebat
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setProbabilitas("Hujan Sangat Lebat")}
                name="probabilitas"
                value={probabilitas}
                className="bg-pink-100 text-pink-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Hujan Sangat Lebat
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setProbabilitas("Hujan Ekstrem")}
                name="probabilitas"
                value={probabilitas}
                className="bg-red-100 text-red-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Hujan Ekstrem
            </button>
        </div>
    );
};
export default Sorted;
