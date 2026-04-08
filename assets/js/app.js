const API = "http://localhost/full-stack-test/api/user.php";

let table;

// initialize DataTable
table = $("#userTable").DataTable({
  processing: true,
  serverSide: true,
  pageLength: 5,
  lengthMenu: [1, 5, 10, 25, 50],
  ajax: {
    url: API + "?action=read",
    type: "GET",
  },
  columns: [
    { data: "name" },
    { data: "email" },
    {
      data: null,
      render: function (data) {
        return `
          <button class="editdeletebutton" onclick="openEdit(${data.id}, '${data.name}', '${data.email}')">Edit</button>
          <button class="editdeletebutton" onclick="deleteUser(${data.id})">Delete</button>
        `;
      },
    },
  ],
});

document.getElementById("userForm").addEventListener("submit", function (e) {
  e.preventDefault();

  fetch(API + "?action=create", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
      name: document.getElementById("name").value,
      email: document.getElementById("email").value,
    }),
  })
    .then((res) => res.json())
    .then(() => {
      table.ajax.reload(null, false); // 🔥 no reset pagination
      document.getElementById("userForm").reset();
    });
});

function openEdit(id, name, email) {
  document.getElementById("editModal").classList.add("show");
  document.getElementById("editId").value = id;
  document.getElementById("editName").value = name;
  document.getElementById("editEmail").value = email;

  document.getElementById("editModal").style.display = "block";
}

function closeModal() {
  document.getElementById('editModal').classList.remove('show');
  document.getElementById("editModal").style.display = "none";
}

function updateUser() {
  fetch(API + "?action=update", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
      id: document.getElementById("editId").value,
      name: document.getElementById("editName").value,
      email: document.getElementById("editEmail").value,
    }),
  })
    .then((res) => res.json())
    .then(() => {
      closeModal();
      table.ajax.reload(null, false); // 🔥 stay on same page
    });
}

function deleteUser(id) {
  if (!confirm("Are you sure?")) return;

  fetch(API + "?action=delete&id=" + id).then(() => {
    table.ajax.reload(null, false);
  });
}

/* ── DESKTOP: switch tab ── */
function switchTab(index) {
    // existing tab/carousel logic (whatever you already have)...
    document.querySelectorAll('.tab-item').forEach((btn, i) => {
        btn.classList.toggle('active', i === index);
    });
    document.querySelectorAll('.tab-carousel').forEach((tc, i) => {
        tc.classList.toggle('active', i === index);
    });

    // ← only new line:
    const img = document.querySelector('.tab-item.active').getAttribute('data-image');
    document.getElementById('tabImage').src = img;
}

/* ── DESKTOP: inner carousel dot click ──
    tabIndex  = which tab-carousel (0,1,2)
    slideIndex = which slide inside it (0,1,2)
*/
function deskSlide(tabIndex, slideIndex) {
  const tc = document.getElementById("tc-" + tabIndex);
  tc.querySelectorAll(".inner-slide").forEach((el, i) =>
    el.classList.toggle("active", i === slideIndex),
  );
}

/* ── MOBILE: accordion ── */
let openAcc = 0;
function toggleAcc(index) {
  const body = document.getElementById("accBody-" + index);
  const toggle = document.getElementById("toggle-" + index);
  const arrow = document.getElementById("arrow-" + index);
  const header = document.querySelectorAll(".acc-header")[index];
  if (openAcc === index) {
    body.classList.remove("open");
    toggle.textContent = "+";
    arrow.classList.remove("show");
    header.classList.remove("open");
    openAcc = -1;
  } else {
    if (openAcc !== -1) {
      document.getElementById("accBody-" + openAcc).classList.remove("open");
      document.getElementById("toggle-" + openAcc).textContent = "+";
      document.getElementById("arrow-" + openAcc).classList.remove("show");
      document
        .querySelectorAll(".acc-header")
        [openAcc].classList.remove("open");
    }
    body.classList.add("open");
    toggle.textContent = "−";
    arrow.classList.add("show");
    header.classList.add("open");
    openAcc = index;
  }
}

/* ── MOBILE: inner carousel dot click ──
    accIndex   = which accordion (0,1,2)
    slideIndex = which slide inside it (0,1,2)
*/
function mobSlide(accIndex, slideIndex) {
  const mc = document.getElementById("mc-" + accIndex);
  mc.querySelectorAll(".mob-inner-slide").forEach((el, i) =>
    el.classList.toggle("active", i === slideIndex),
  );
}
