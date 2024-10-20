
const newTaskBtns = Array.from(document.querySelectorAll(".newTaskBtn"));
newTaskBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        let taskbox = btn.parentElement.firstElementChild;
        makeNewTask(taskbox);
    })
});

Selecttasks();

function Selecttasks(){
    const allTasks = document.querySelectorAll(".task");
    allTasks.forEach(task => {
        task.onclick = function(e){
            const taskId = task.dataset.taskid;
            if (e.target === task) {
                console.log(task)
                console.log(taskId);
                $.ajax({
                    method:'POST',
                    url: '/task/show/' + taskId,
                    success:function(response){
                        const content = makePopScreen();
                        console.log("taak gegevens opgehaald");
                        console.log(response)
                        content.innerHTML = response.html
                    },
                    error:function(error){
                        console.log("fout in taak gegevens ophalen");
                        console.log(error)
                    }
                });
            } else if(e.target.type === 'checkbox'){
                const checked = e.target.checked == true ? 1 : 0;
                console.log(checked);
                $.ajax({
                    method: "POST",
                    url: "/task/update/" + taskId,
                    data: {
                        'completed' : checked,
                    },
                    success:function(response){
                        console.log('taak succesvol geupdate');
                        console.log(response);
                    },
                    error:function(error){
                        console.log('fout om taak te updaten');
                        console.log(error);
                    },
                })
            }
        }
    });
}

function makeNewTask(taskbox){
    const box = document.createElement('div');
    box.classList.add("bg-colorblack", "w-full", "px-4", "py-3", "flex", "items-center", "space-x-3", "rounded-lg", "text-colorlightgray");

    const input = document.createElement('input');
    input.classList.add("h-full", "w-full", "bg-transparent", "border-0", "outline-none", "text-white");

    const addTaskBtn = document.createElement('button');
    addTaskBtn.innerHTML = "Voeg toe";
    addTaskBtn.classList.add("w-max","bg-colorlightblack","text-white", "px-3", "py-2", "rounded-lg", "mr-1");

    const cancelAddTaskBtn = document.createElement('button');
    cancelAddTaskBtn.innerHTML = '&times;';
    cancelAddTaskBtn.classList.add("px-4","py-2","bg-colorlightblack","text-white", "rounded-lg");

    const boxForAddCancelBtns = document.createElement('div');
    addTaskBtn.onclick = () =>{
        taskToDb(box);
        addTaskBtn.remove()
        cancelAddTaskBtn.remove()
    }
    cancelAddTaskBtn.onclick = () =>{
        box.remove()
        cancelAddTaskBtn.remove()
        addTaskBtn.remove()
    }

    // input.addEventListener('blur', taskToDb);
    
    function taskToDb(box){
        const taskName = input.value.trim();
        const parenElementId = taskbox.parentElement.dataset.panel_id
        console.log(parenElementId, taskName);
        if(taskName !== '' && parenElementId && taskName){

            $.ajax({
                method:'POST',
                url:'/task/create',
                data:{
                    panel_id : parenElementId,
                    title : taskName
                },
                success:function(response) {
                    console.log('responsedata')
                    console.log(response.data);
                    box.outerHTML = response.data
                    Selecttasks()
                    
                },
                error:function(error){
                    console.log(error);
                },
             });

        } else{
            box.remove()
            cancelAddTaskBtn.remove()
            addTaskBtn.remove()
        }
    }

    box.appendChild(input);
    boxForAddCancelBtns.appendChild(addTaskBtn);
    boxForAddCancelBtns.appendChild(cancelAddTaskBtn);

    taskbox.appendChild(box);
    taskbox.appendChild(boxForAddCancelBtns);

    input.focus();
}

function deleteTask(){

}

function editTask(){
    $.ajax({
        method: 'POST',
        url: '/task/update/' + taskId
});
}

function makePopScreen() {
    // Create the overlay (semi-transparent background)
    const overlay = document.createElement('div');
    overlay.classList.add(
        'fixed', 'inset-0', 'bg-black', 'bg-opacity-50', 'flex', 'justify-center', 'items-center', 'z-50'
    );

    // Create the popup box
    const box = document.createElement('div');
    box.classList.add(
        'bg-colorlightblack', 'w-2/4', 'p-5', 'rounded-lg', 'relative', 'shadow-lg'
    );

    const closeButton = document.createElement('button');
    closeButton.innerHTML = '&times;';
    closeButton.classList.add(
    'absolute', 'top-0', 'right-2', 'text-2xl', 'text-white', 'focus:outline-none'
    );

    closeButton.addEventListener('click', () => {
        document.body.removeChild(overlay);
    });

    box.appendChild(closeButton);

    overlay.appendChild(box);

    document.body.appendChild(overlay);

    overlay.addEventListener('click', (e) => {
        if (e.target === overlay) {
            document.body.removeChild(overlay);
        }
    });

    const content = document.createElement('div');
    box.appendChild(content);
    return content;
}
function makeNewPanel(){
    
}