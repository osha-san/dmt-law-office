document.querySelectorAll('.navbar ul li').forEach(item => {
  item.addEventListener('click', function() {
      document.querySelectorAll('.navbar ul li').forEach(el => el.classList.remove('active'));
      this.classList.add('active');
  });
});

const cases = [
    {
      title: "Jose Jackie Chan vs. Maria Carey Batumbakal",
      type: "Labor Law",
      caseNo: "CIVIL CASE No. 55221",
    },
    {
      title: "Bruno Mouse vs. Quoya Jobert",
      type: "Litigation",
      caseNo: "CIVIL CASE No. 678912",
    },
    {
      title: "People of the Philippines vs. Kenneth Sy",
      type: "Labor Law",
      caseNo: "CRIM-12345-MKT",
    },
    {
      title: "ABC Corp. vs. Jonathan Joestar",
      type: "Corporate Law",
      caseNo: "CIVIL CASE No. 414151",
    },
    {
      title: "Lisa Hontiveros vs. Alice Gew",
      type: "Family Law",
      caseNo: "CIVIL CASE NO. 90000",
    },
    {
      title: "People of the Philippines vs. Gusion Dela Cruz",
      type: "Labor Law",
      caseNo: "CRIM-22123-MNL",
    },
    {
      title: "People of the Philippines vs. Taylor Dolores Swift",
      type: "Immigration",
      caseNo: "CRIM-12311-MNL",
    },
    {
      title: "This Corp. vs. Eminem Santos",
      type: "Labor Law",
      caseNo: "CIVIL CASE No. 414141",
    },
    {
      title: "People of the Philippines vs. BenBen Agustin",
      type: "Immigration",
      caseNo: "CRIM-515151-MNL",
    },
    {
      title: "Kagura Dela Cruz vs. John LLoyd Dela Cruz",
      type: "Labor Law",
      caseNo: "CIVIL CASE NO. 181818",
    },
    {
      title: "People of the Philippines vs. Gatotkaca",
      type: "Taxation",
      caseNo: "CRIM-21211-MKT",
    },
  ];

  function populateTable(filteredCases) {
    const tableBody = document.getElementById("caseTableBody");
    tableBody.innerHTML = "";
    const casesToDisplay = filteredCases || cases;

    casesToDisplay.forEach((caseItem) => {
      const row = document.createElement("tr");
      row.innerHTML = `
              <td><input type="checkbox" class="checkbox"></td>
              <td>${caseItem.title}</td>
              <td>${caseItem.type}</td>
              <td>${caseItem.caseNo}</td>
          `;
      tableBody.appendChild(row);
    });

    document.querySelectorAll(".checkbox").forEach((checkbox) => {
      checkbox.addEventListener("change", function () {
        this.closest("tr").classList.toggle("selected", this.checked);
      });
    });
  }

  function searchCases() {
    const searchInput = document
      .querySelector(".search-bar input")
      .value.toLowerCase();
    const filteredCases = cases.filter(
      (caseItem) =>
        caseItem.title.toLowerCase().includes(searchInput) ||
        caseItem.type.toLowerCase().includes(searchInput) ||
        caseItem.caseNo.toLowerCase().includes(searchInput)
    );
    populateTable(filteredCases);
  }

  document.getElementById("search-btn").addEventListener("click", searchCases);

  function showDeleteModal() {
    const checkboxes = document.querySelectorAll(".checkbox:checked");
    if (checkboxes.length == 0) {
      alert("Please select a case to delete.");
    }
    else{
        document.getElementById("deleteModal").style.display = "block";
    }
    /*
    document.getElementById("deleteModal").style.display = "block";
    */
  }

  function showPasswordModal() {
    document.getElementById("passwordModal").style.display = "block";
  }

  function closeModal() {
    document.getElementById("deleteModal").style.display = "none";
    document.getElementById("passwordModal").style.display = "none";
  }

  function confirmDelete() {
    closeModal();
    showPasswordModal();
  }

  function confirmPassword() {
    alert("Record deleted successfully");
    closeModal();
  }

  document
    .querySelector(".delete-btn")
    .addEventListener("click", showDeleteModal);

  populateTable();
