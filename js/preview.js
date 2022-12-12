$(document).ready(() => {
  $("#photo").change(function () {
    const file = this.files[0];
    // console.log(file);
    if (file) {
      let reader = new FileReader();
      reader.onload = function (event) {
        // console.log(event.target.result);
        $("#imgPreview").attr("src", event.target.result);
      };
      reader.readAsDataURL(file);
    }
    $("#nombrePreview").text($("#nombreProducto").val());
    $("#descPreview").text($("#descProducto").val());
    $("#precioPreview").text($("#precioProducto").val());
  });
});

function message(tipo, dato) {
  const Toast = Swal.mixin({
    toast: true,
    position: "bottom-end",
    showConfirmButton: false,
    timer: 3000,
    didOpen: (toast) => {
      toast.addEventListener("mouseenter", Swal.stopTimer);
      toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
  });

  if (tipo == "error") {
    Toast.fire({
      icon: "error",
      title: dato,
    });
  } else if (tipo == "success") {
    Toast.fire({
      icon: "success",
      title: dato,
    });
  } else if (tipo == "done") {
    Swal.fire({
      title: dato,
      icon: "success",
      text: "Formulario enviado",
    });
  } else {
    Toast.fire({
      icon: "warning",
      title: dato,
    });
  }
}

$("#crearProducto").click(function () {
  if (
    $("#nombreProducto").val() == "" ||
    $("#descProducto").val() == "" ||
    $("#categoriaProducto").val() == "" ||
    $("#precioProducto").val() == ""
  ) {
    message("error", "Los datos son necesarios");
  } else {
    let postData = {
      nombreProducto: $("#nombreProducto").val(),
      descripcion: $("#descProducto").val(),
      categoria: $("#categoriaProducto").val(),
      precio: $("#precioProducto").val(),
      imagen: $("#urlImagen").val(),
    };
    Swal.fire({
      title: "Quieres crear esta venta?",
      showDenyButton: true,
      icon: "info",
      confirmButtonText: "Guadar",
      denyButtonText: `Cancelar`,
    }).then((result) => {
      if (result.isConfirmed) {
        $.post("./php/insert.php", postData, function (response) {
          // console.log(response);
          if (response == "Error" || response.includes("ERROR")) {
            console.log(response);
            message("error", "hubo un error en la base de datos");
            console.error("Error");
            return;
          }
          if (response == "success" || response.includes("success")) {
            // console.log(response);
            $("#nombreProducto").val("");
            $("#descProducto").val("");
            $("#categoriaProducto").val("");
            $("#precioProducto").val("");
            $("#nombrePreview").val("");
            $("#descPreview").val("");
            $("#precioPreview").val("");
            $("#urlImagen").val("");
            message("done", "Producto creado con exito");
            return;
          }
        });
      } else if (result.isDenied) {
        Swal.fire("Producto no guardado", "", "info");
        return;
      }
    });
  }
});
