document.addEventListener("DOMContentLoaded", function () {
    const avatars = [
        "foto2.jpeg", 
        "foto3.jpeg", 
        "foto4.jpeg", 
        "foto5.jpeg", 
        "foto6.jpeg", 
        "foto7.jpg",
    ];

    // Seleccionar avatar aleatorio
    const randomAvatar = avatars [Math.floor(Math.random() * avatars.length)];

    // Asignar avatar al campo oculto y mostrarlo
    document.getElementById("avatar").value = randomAvatar;
    document.getElementById("avatarPreview").innerHTML = `<img src="avatars/${randomAvatar}" alt="Avatar" width="100">`;
});
