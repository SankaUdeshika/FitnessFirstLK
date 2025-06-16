<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Trainer Admin Panel</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #121212;
      color: white;
      padding: 30px;
    }

    .form-container {
      background: #1e1e1e;
      padding: 20px;
      border-radius: 12px;
      max-width: 500px;
      margin-bottom: 30px;
    }

    input, label {
      width: 100%;
      margin: 10px 0;
      padding: 10px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
    }

    input[type="file"] {
      padding: 5px;
      background: #000;
      color: white;
    }

    button {
      background-color: crimson;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #1e1e1e;
      margin-top: 40px;
      border-radius: 12px;
      overflow: hidden;
    }

    th, td {
      padding: 12px;
      border-bottom: 1px solid #444;
      text-align: center;
    }

    th {
      background-color: #2c2c2c;
    }

    img.preview {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 8px;
    }

    .edit-btn, .delete-btn {
      background-color: #444;
      padding: 6px 10px;
      border-radius: 6px;
      margin: 3px;
      cursor: pointer;
    }

    .edit-btn:hover { background-color: #3498db; }
    .delete-btn:hover { background-color: #e74c3c; }
    a {
      color: #00aced;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2 id="form-title">Add Trainer</h2>
    <input type="text" id="trainerName" placeholder="Trainer Name" required />
    <input type="text" id="position" placeholder="Position" required />
    <input type="text" id="facebook" placeholder="Facebook Link" />
    <input type="text" id="instagram" placeholder="Instagram Link" />
    <input type="file" id="imageInput" accept="image/*" required />
    <button onclick="handleSubmit()">Add Trainer</button>
  </div>

  <table id="trainerTable">
    <thead>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Position</th>
        <th>Facebook</th>
        <th>Instagram</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <!-- Trainers will show up here -->
    </tbody>
  </table>

  <script>
    let trainerList = [
      {
        name: "Evenjaline",
        position: "Front Office",
        facebook: "https://facebook.com/evenjaline",
        instagram: "https://instagram.com/evenjaline",
        imageUrl: "https://i.imgur.com/UMt3KcF.jpg"
      },
      {
        name: "Jake Mendes",
        position: "Personal Trainer",
        facebook: "https://facebook.com/jakefit",
        instagram: "https://instagram.com/jakefit",
        imageUrl: "https://i.imgur.com/ZQZSWRT.jpg"
      },
      {
        name: "Sasha Lee",
        position: "Yoga Instructor",
        facebook: "",
        instagram: "https://instagram.com/yogawithsasha",
        imageUrl: "https://i.imgur.com/L2vK0vJ.jpg"
      }
    ];

    let editingIndex = -1;

    function handleSubmit() {
      const name = document.getElementById('trainerName').value;
      const position = document.getElementById('position').value;
      const facebook = document.getElementById('facebook').value;
      const instagram = document.getElementById('instagram').value;
      const file = document.getElementById('imageInput').files[0];

      if (!name || !position || (!file && editingIndex === -1)) {
        alert("Please fill all required fields.");
        return;
      }

      const reader = new FileReader();
      reader.onload = function (e) {
        const imageUrl = file ? e.target.result : trainerList[editingIndex].imageUrl;
        const trainer = { name, position, facebook, instagram, imageUrl };

        if (editingIndex >= 0) {
          trainerList[editingIndex] = trainer;
          editingIndex = -1;
          document.querySelector("button").innerText = "Add Trainer";
          document.getElementById("form-title").innerText = "Add Trainer";
        } else {
          trainerList.push(trainer);
        }

        clearForm();
        renderTrainerTable();
      };

      if (file) {
        reader.readAsDataURL(file);
      } else {
        reader.onload();
      }
    }

    function renderTrainerTable() {
      const tbody = document.querySelector("#trainerTable tbody");
      tbody.innerHTML = "";

      trainerList.forEach((t, index) => {
        const row = `
          <tr>
            <td><img src="${t.imageUrl}" class="preview" alt="Trainer"></td>
            <td>${t.name}</td>
            <td>${t.position}</td>
            <td>${t.facebook ? `<a href="${t.facebook}" target="_blank">Facebook</a>` : '—'}</td>
            <td>${t.instagram ? `<a href="${t.instagram}" target="_blank">Instagram</a>` : '—'}</td>
            <td>
              <span class="edit-btn" onclick="editTrainer(${index})">✏️ Edit</span>
              <span class="delete-btn" onclick="deleteTrainer(${index})">🗑️ Delete</span>
            </td>
          </tr>
        `;
        tbody.innerHTML += row;
      });
    }

    function editTrainer(index) {
      const t = trainerList[index];
      document.getElementById('trainerName').value = t.name;
      document.getElementById('position').value = t.position;
      document.getElementById('facebook').value = t.facebook;
      document.getElementById('instagram').value = t.instagram;
      editingIndex = index;

      document.querySelector("button").innerText = "Update Trainer";
      document.getElementById("form-title").innerText = "Update Trainer";
    }

    function deleteTrainer(index) {
      if (confirm("Are you sure you want to delete this trainer?")) {
        trainerList.splice(index, 1);
        renderTrainerTable();
      }
    }

    function clearForm() {
      document.getElementById('trainerName').value = '';
      document.getElementById('position').value = '';
      document.getElementById('facebook').value = '';
      document.getElementById('instagram').value = '';
      document.getElementById('imageInput').value = '';
    }

    // Load initial table
    renderTrainerTable();
  </script>

</body>
</html>
