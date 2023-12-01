const ButtonEdit = ({editLink}) => {
    return (
        <div>
            <a
                href={editLink}
                className="px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg hover:bg-primary-hover"
            >
                Edit
            </a>
        </div>
    );
};

export default ButtonEdit;