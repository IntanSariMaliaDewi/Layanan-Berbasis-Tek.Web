document.addEventListener("DOMContentLoaded", function() {
    var addButton = document.getElementById("addButton");
    var taskInput = document.getElementById("taskInput");
    var taskList = document.getElementById("taskList");

    addButton.innerHTML = '<i class="fas fa-plus"></i> Add Task';

    addButton.addEventListener("click", function() {
        var task = taskInput.value.trim();
        if (task !== "") {
            var li = document.createElement("li");
            li.textContent = task;
            li.classList.add("todo-item");
            taskList.appendChild(li);
            taskInput.value = "";
        } else {
            alert("Please enter a task.");
        }
    });

    taskList.addEventListener("click", function(event) {
        if (event.target.tagName === "LI") {
            event.target.remove();
        }
    });
});
