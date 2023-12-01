const ButtonDelete = ({ deleteAction }) => {
    return (
        <div className="px-3 py-2 text-sm font-medium text-center text-white bg-red-primary rounded-lg hover:bg-red-primary-hover">
            <form action={deleteAction} method="post">
                <button>Hapus</button>
            </form>
        </div>
    );
};

export default ButtonDelete;