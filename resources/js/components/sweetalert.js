import Swal from "sweetalert2";

export default (Alpine) => {
    Alpine.store("sweetalert", {
        notify(notification) {
            const method = notification.type ?? "info";

            Swal.fire({
                title: notification.title,
                text: notification.message,
                icon: method,
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: false,
                toast: true,
                position: "top-end",
            });
        },
        alert(notification) {
            const method = notification.type ?? "info";

            Swal.fire({
                title: notification.title,
                text: notification.message,
                icon: method,
                confirmButtonText: "OK",
            });
        },
    });
};
