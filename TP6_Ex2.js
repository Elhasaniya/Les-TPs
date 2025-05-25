document.getElementById('forme').addEventListener('submit', function (e) {
  e.preventDefault();

  const taskInput = document.getElementById('task-input');
  const taskText = taskInput.value.trim();

  if (taskText === '') return;

  // Créer la tâche
  const li = document.createElement('li');
  li.textContent = taskText;

  const actions = document.createElement('div');
  actions.className = 'actions';

  // Bouton Accomplie
  const doneBtn = document.createElement('button');
  doneBtn.textContent = '✔';
  doneBtn.addEventListener('click', () => {
    li.classList.toggle('completed');
  });

  // Bouton Supprimer
  const deleteBtn = document.createElement('button');
  deleteBtn.textContent = '🗑';
  deleteBtn.addEventListener('click', () => {
    li.remove();
  });

  actions.appendChild(doneBtn);
  actions.appendChild(deleteBtn);
  li.appendChild(actions);

  document.getElementById('task-list').appendChild(li);
  taskInput.value = '';
});
