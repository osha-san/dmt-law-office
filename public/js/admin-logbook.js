let currentTab = "outgoing"; // Initially set to outgoing
let outgoingDocuments = JSON.parse(sessionStorage.getItem("outgoingDocuments")) || [];
let incomingDocuments = JSON.parse(sessionStorage.getItem("incomingDocuments")) || [];

function renderDocuments() {
  const documents =
    currentTab === "outgoing" ? outgoingDocuments : incomingDocuments;
  const tableBody =
    currentTab === "outgoing"
      ? document.getElementById("outgoingList")
      : document.getElementById("incomingList");

  tableBody.innerHTML = documents
    .map(
      (doc) => `
        <tr>
            <td><a href="${doc.url}" target="_blank">${doc.name}</a></td>
            <td>${doc.date}</td>
        </tr>`
    )
    .join("");

  const dateHeaderText =
    currentTab === "outgoing"
      ? "Date Issued\nMM/DD/YYYY"
      : "Date Received\nMM/DD/YYYY";

  const dateHeader = document.getElementById("dateHeader");
  dateHeader.innerHTML = dateHeaderText.replace("\n", "<br>");
}

function switchTab(tab) {
  currentTab = tab;
  // Update the UI to show the appropriate tab
  document.getElementById("outgoing").style.display = tab === "outgoing" ? "block" : "none";
  document.getElementById("incoming").style.display = tab === "incoming" ? "block" : "none";
  
  // Update button styling
  document.getElementById("ongoingTab").classList.toggle("btnActive", tab === "outgoing");
  document.getElementById("ingoingTab").classList.toggle("btnActive", tab === "incoming");

  renderDocuments(); // Re-render the documents
}

function ongoingIngoingTab(tab) {
  switchTab(tab);
}

function openModal() {
  const modal = document.getElementById("addModal");
  modal.style.display = "block";
}

function closeModal() {
  const modal = document.getElementById("addModal");
  modal.style.display = "none";
}

document.getElementById("addDocumentForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const newDoc = {
    name: document.getElementById("documentUpload").files[0].name,
    date: document.getElementById("documentDate").value,
    url: URL.createObjectURL(document.getElementById("documentUpload").files[0]),
  };

  if (currentTab === "outgoing") {
    outgoingDocuments.push(newDoc);
    sessionStorage.setItem("outgoingDocuments", JSON.stringify(outgoingDocuments));
  } else {
    incomingDocuments.push(newDoc);
    sessionStorage.setItem("incomingDocuments", JSON.stringify(incomingDocuments));
  }

  renderDocuments();
  closeModal();
});

window.onload = function () {
  renderDocuments(); // Render documents based on sessionStorage on page load
};
