
// ADD Experience
function openAddModal() {
    document.getElementById("experienceForm").reset();
    document.getElementById("exp_id").value = "";
    document.querySelector(".modal-title").innerText = "Add Experience";
    new bootstrap.Modal(document.getElementById('experienceModal')).show();
}

// Edit Experience
function openEditModal(id) {
    fetch("action.php", {
        method: "POST",
        body: new URLSearchParams({ action: "fetch", id: id })
    })
    .then(res => res.json())
    .then(data => {
        document.getElementById("exp_id").value = data.id;
        document.querySelector("[name=title]").value = data.title;
        document.querySelector("[name=company]").value = data.company;
        document.querySelector("[name=description]").value = data.description;
        document.querySelector(".modal-title").innerText = "Edit Experience";
        new bootstrap.Modal(document.getElementById('experienceModal')).show();
    });
}

// Submit Experience Form
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("experienceForm").addEventListener("submit", function(e) {
        e.preventDefault();
        let formData = new FormData(this).values();

        $.ajax({
            type: "POST",
            url: "action.php?action=addExperience", // Change to your server-side script
            data: formData,
            processData:false, // Prevents jQuery from converting the object to a string
            contentType:false, // Prevents jQuery from setting the wrong content-type header
            success: function (data) {
                alert("Form Submitted Successfully");
            },
            error: function (data) {
                alert("Error occurred while submitting the form");
            }
                
        });
        // let formData = new FormData(this);
        // formData.append("action", document.getElementById("exp_id").value ? "update" : "add");

        // fetch("action.php", {
        //     method: "POST",
        //     body: formData
        // })
        // .then(res => res.text())
        // .then(() => location.reload());
    });
});

// Delete Experience
function deleteExperience(id) {
    if (confirm("Are you sure you want to delete this experience?")) {
        fetch("action.php", {
            method: "POST",
            body: new URLSearchParams({
                action: "delete",
                id: id
            })
        })
        .then(() => location.reload());
    }
}