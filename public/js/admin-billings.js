document.querySelectorAll('.navbar ul li').forEach(item => {
  item.addEventListener('click', function() {
      document.querySelectorAll('.navbar ul li').forEach(el => el.classList.remove('active'));        
      this.classList.add('active');
  });
});

document.addEventListener("DOMContentLoaded", function () {
    const invoiceTable = document.getElementById("invoiceTable");
    const newInvoiceBtn = document.getElementById("newInvoice");
    const invoiceModal = document.getElementById("invoiceModal");
    const proofModal = document.getElementById("proofModal");
    const paymentDeclinedModal = document.getElementById("paymentDeclinedModal");
    const closeBtns = document.querySelectorAll(".close");
    const rejectPaymentBtn = document.getElementById("rejectPayment");
    const confirmPaymentBtn = document.getElementById("confirmPayment");
    const cancelDeclineBtn = document.getElementById("cancelDecline");
    const confirmDeclineBtn = document.getElementById("confirmDecline");
    const viewProofBtn = document.getElementById("viewProof");
  
    const invoices = [
      {
        id: "000001",
        billedTo: "Juan Dela Cruz",
        service: "Consultation",
        dueDate: "09/19/24",
        status: "Not Paid",
        amount: 10000,
      },
      {
        id: "000002",
        billedTo: "Juan Dela Cruz",
        service: "Complaint Filing",
        dueDate: "09/07/24",
        status: "Not Paid",
        amount: 10000,
      },
      {
        id: "000003",
        billedTo: "Michelle Jackson",
        service: "Contract Signing",
        dueDate: "MM/DD/YY",
        status: "Paid",
        amount: 10000,
      },
    ];
  
    function renderInvoices() {
      const tbody = invoiceTable.querySelector("tbody");
      tbody.innerHTML = "";
      invoices.forEach((invoice) => {
        const row = document.createElement("tr");
        row.innerHTML = `
              <td>${invoice.id}</td>
              <td>${invoice.billedTo}</td>
              <td>${invoice.service}</td>
              <td>${invoice.dueDate}</td>
              <td class="status-${invoice.status
                .toLowerCase()
                .replace(" ", "-")}">${invoice.status}</td>
              <td>${
                invoice.status === "Not Paid"
                  ? '<button class="view-btn">View</button>'
                  : ""
              }</td>
            `;
        tbody.appendChild(row);
      });
    }
  
    function showInvoiceModal(invoice) {
      document.getElementById("invoiceNumber").textContent = invoice.id;
      document.getElementById("billToName").textContent = invoice.billedTo;
      document.getElementById("billToAmount").textContent =
        invoice.amount.toLocaleString();
      document.getElementById("invoiceDate").textContent = "August 07, 2024";
      document.getElementById("description").textContent = invoice.service;
      document.getElementById("quantity").textContent = "1";
      document.getElementById("unitCost").textContent =
        "₱" + invoice.amount.toLocaleString();
      document.getElementById("amount").textContent =
        "₱" + invoice.amount.toLocaleString();
      document.getElementById("totalAmount").textContent =
        invoice.amount.toLocaleString();
      document.getElementById("modeOfPayment").value = "Over the counter";
      document.getElementById("amountPaid").value =
        "₱" + invoice.amount.toLocaleString();
      document.getElementById("proofOfPayment").value = "Proof_of_payment.jpg";
      document.getElementById("transactionNo").value = "########";
  
      invoiceModal.style.display = "block";
    }
  
    function closeModal(modal) {
      modal.style.display = "none";
    }
  
    function showProofModal() {
      document.getElementById("proofImage").src =
        "/placeholder.svg?height=300&width=400";
      proofModal.style.display = "block";
    }
  
    newInvoiceBtn.addEventListener("click", () => {});
  
    closeBtns.forEach((btn) => {
      btn.addEventListener("click", () => closeModal(btn.closest(".modal")));
    });
  
    rejectPaymentBtn.addEventListener("click", () => {
      paymentDeclinedModal.style.display = "block";
    });
  
    confirmPaymentBtn.addEventListener("click", () => {
      closeModal(invoiceModal);
    });
  
    cancelDeclineBtn.addEventListener("click", () =>
      closeModal(paymentDeclinedModal)
    );
  
    confirmDeclineBtn.addEventListener("click", () => {
      closeModal(paymentDeclinedModal);
      closeModal(invoiceModal);
    });
  
    viewProofBtn.addEventListener("click", showProofModal);
  
    window.addEventListener("click", (event) => {
      if (event.target.classList.contains("modal")) {
        closeModal(event.target);
      }
    });
  
    invoiceTable.addEventListener("click", (event) => {
      if (event.target.classList.contains("view-btn")) {
        const row = event.target.closest("tr");
        const invoiceId = row.cells[0].textContent;
        const invoice = invoices.find((inv) => inv.id === invoiceId);
        showInvoiceModal(invoice);
      }
    });
  
    renderInvoices();

    //add
  const newInvoiceModal = document.getElementById("newInvoiceModal");
  const newCloseBtn = newInvoiceModal.querySelector(".close");
  const newBillToSelect = document.getElementById("newBillTo");
  const newBillToAmountInput = document.getElementById("newBillToAmountInput");
  const newDescriptionSelect = document.getElementById("newDescription");
  const newQuantityInput = document.getElementById("newQuantity");
  const newUnitCostInput = document.getElementById("newUnitCost");
  const newAmountDisplay = document.getElementById("newAmount");
  const newTotalAmountDisplay = document.getElementById("newTotalAmount");

  // Open modal
  document.getElementById("newInvoice").addEventListener("click", () => {
    document.getElementById("newInvoiceNumber").textContent = "00123";
    newInvoiceModal.style.display = "block";
  });

  // Close modal
  newCloseBtn.addEventListener("click", () => {
    newInvoiceModal.style.display = "none";
  });

  // Close modal when clicking outside content
  window.addEventListener("click", (event) => {
    if (event.target === newInvoiceModal) {
      newInvoiceModal.style.display = "none";
    }
  });

  // Update amount dynamically based on quantity and unit cost
  function updateAmount() {
    const quantity = parseInt(newQuantityInput.value) || 0;
    const amount = parseFloat(newBillToAmountInput.value) || 0;
    const totalamount = quantity * amount;
    newAmountDisplay.textContent = totalamount.toLocaleString();
    newTotalAmountDisplay.textContent = totalamount.toLocaleString();
    newUnitCostInput.textContent = totalamount.toLocaleString();
  }

  // Event listeners to update amount on changes
  newQuantityInput.addEventListener("input", updateAmount);
  newBillToAmountInput.addEventListener("input", updateAmount);
  });

  // Get today's date
const today = new Date();

// Format the date to display only the month, day, and year
const options = { month: 'long', day: 'numeric', year: 'numeric' };
const formattedDate = today.toLocaleDateString(undefined, options);

// Display the date in the HTML element
document.getElementById('newInvoiceDate').innerText = formattedDate;

// Elements for new invoice confirmation
const confirmModal = document.getElementById("confirmModal");
const confirmRejectBtn = document.getElementById("confirmReject");
const cancelRejectBtn = document.getElementById("cancelReject");
const sendInvoiceBtn = document.getElementById("newConfirmPayment");

// Show confirmModal when "Send Invoice" is clicked
sendInvoiceBtn.addEventListener("click", () => {
  confirmModal.style.display = "block";
});

// Close confirmModal on "Cancel"
cancelRejectBtn.addEventListener("click", () => {
  confirmModal.style.display = "none";
});

// Close both confirmModal and newInvoiceModal on "Confirm"
confirmRejectBtn.addEventListener("click", () => {
  confirmModal.style.display = "none";
  newInvoiceModal.style.display = "none";
}); 