<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Supplier Portal - BhaajiBazaar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(135deg, #f8f9fa, #e0f7fa);
      min-height: 100vh;
      padding-top: 60px;
    }
    .section {
      display: none;
    }
    .active-section {
      display: block;
    }
    .dashboard-card {
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      transition: 0.3s ease;
    }
    .dashboard-card:hover {
      transform: scale(1.02);
    }
    .alert-item {
      transition: background-color 0.3s ease;
    }
    .low-stock {
      background-color: #fff3cd;
    }
    .restocked {
      background-color: #d4edda;
    }
    .header {
      background-color: #28a745;
      color: white;
      padding: 15px;
      text-align: center;
      border-radius: 10px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

<div class="container">

  <!-- LOGIN SECTION -->
  <div id="login-section" class="section active-section">
    <h2 class="text-center mb-4">Supplier Login</h2>
    <form class="p-4 bg-white rounded shadow">
      <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control" required />
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" class="form-control" required />
      </div>
      <button type="button" class="btn btn-primary w-100" onclick="goToDashboard()">Login</button>
      <p class="text-center mt-3">New supplier? <a href="#" onclick="showSection('register-section')">Register here</a></p>
    </form>
  </div>

  <!-- REGISTER SECTION -->
  <div id="register-section" class="section">
    <h2 class="text-center mb-4">Supplier Registration</h2>
    <form class="p-4 bg-white rounded shadow">
      <div class="mb-3">
        <label>Name</label>
        <input type="text" class="form-control" required />
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control" required />
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" class="form-control" required />
      </div>
      <button type="button" class="btn btn-success w-100" onclick="goToDashboard()">Register</button>
      <p class="text-center mt-3">Already registered? <a href="#" onclick="showSection('login-section')">Login here</a></p>
    </form>
  </div>

  <!-- DASHBOARD SECTION -->
  <div id="dashboard-section" class="section">
    <h2 class="mb-4 text-center">📊 Supplier Dashboard</h2>
    <div class="d-flex justify-content-between mb-4 flex-wrap gap-2">
      <button class="btn btn-outline-primary" onclick="showSection('listings-section')">Manage Listings</button>
      <button class="btn btn-outline-secondary" onclick="showSection('orders-section')">Order Management</button>
      <button class="btn btn-outline-success" onclick="showSection('alerts-section')">Restock Alerts</button>
      <button class="btn btn-outline-danger" onclick="showSection('login-section')">Logout</button>
    </div>

    <div class="row">
      <div class="col-md-6 mb-3">
        <div class="p-4 bg-white dashboard-card">
          <h5>Total Products</h5>
          <p>12 raw materials listed</p>
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <div class="p-4 bg-white dashboard-card">
          <h5>Pending Orders</h5>
          <p>5 orders awaiting response</p>
        </div>
      </div>
    </div>
  </div>

  <!-- MANAGE LISTINGS -->
  <div id="listings-section" class="section">
    <h2 class="mb-4 text-center">🛒 Manage Listings</h2>
    <button class="btn btn-secondary mb-3" onclick="showSection('dashboard-section')">← Back to Dashboard</button>
    <table class="table table-bordered table-striped bg-white">
      <thead>
        <tr>
          <th>Material</th>
          <th>Quantity</th>
          <th>Price (₹)</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Tomatoes</td>
          <td>100 kg</td>
          <td>₹25</td>
          <td><button class="btn btn-sm btn-warning">Edit</button> <button class="btn btn-sm btn-danger">Delete</button></td>
        </tr>
        <tr>
          <td>Potatoes</td>
          <td>200 kg</td>
          <td>₹20</td>
          <td><button class="btn btn-sm btn-warning">Edit</button> <button class="btn btn-sm btn-danger">Delete</button></td>
        </tr>
      </tbody>
    </table>
    <button class="btn btn-success mt-3">+ Add New Material</button>
  </div>

  <!-- ORDER MANAGEMENT -->
  <div id="orders-section" class="section">
    <h2 class="mb-4 text-center">📦 Order Management</h2>
    <button class="btn btn-secondary mb-3" onclick="showSection('dashboard-section')">← Back to Dashboard</button>
    <table class="table table-bordered table-hover bg-white">
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Material</th>
          <th>Quantity</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>#1021</td>
          <td>Onions</td>
          <td>50 kg</td>
          <td>Pending</td>
          <td>
            <button class="btn btn-sm btn-success">Accept</button>
            <button class="btn btn-sm btn-danger">Reject</button>
          </td>
        </tr>
        <tr>
          <td>#1022</td>
          <td>Carrots</td>
          <td>80 kg</td>
          <td>Accepted</td>
          <td><button class="btn btn-sm btn-outline-primary">Mark Complete</button></td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- RESTOCK ALERTS SECTION -->
  <div id="alerts-section" class="section">
    <h2 class="mb-4 text-center">📦 Real-Time Restock Alerts</h2>
    <button class="btn btn-secondary mb-3" onclick="showSection('dashboard-section')">← Back to Dashboard</button>
    <div class="header">
      <p>Get notified when any item is low in stock</p>
    </div>
    <div id="alerts" class="list-group">

      <!-- Example Low Stock Alert -->
      <div class="list-group-item alert-item low-stock d-flex justify-content-between align-items-center">
        ⚠ <strong>Potatoes</strong> are low (Only 3 kg left!)
        <button class="btn btn-sm btn-success restock-btn">Restock Now</button>
      </div>

      <div class="list-group-item alert-item low-stock d-flex justify-content-between align-items-center">
        ⚠ <strong>Tomatoes</strong> are low (Only 2.5 kg left!)
        <button class="btn btn-sm btn-success restock-btn">Restock Now</button>
      </div>

    </div>
  </div>

</div>

<script>
  function showSection(id) {
    document.querySelectorAll('.section').forEach(section => section.classList.remove('active-section'));
    document.getElementById(id).classList.add('active-section');
  }

  function goToDashboard() {
    showSection('dashboard-section');
  }

  // Simulate real-time restocking
  document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('.restock-btn').forEach(btn => {
      btn.addEventListener('click', function () {
        const parent = this.parentElement;
        parent.classList.remove('low-stock');
        parent.classList.add('restocked');
        parent.innerHTML = "✅ <strong>Item has been restocked!</strong>";
      });
    });

    // Simulate new alerts appearing
    setTimeout(() => {
      const newAlert = document.createElement('div');
      newAlert.className = "list-group-item alert-item low-stock d-flex justify-content-between align-items-center";
      newAlert.innerHTML = `⚠ <strong>Onions</strong> are low (Only 1.5 kg left!)
        <button class="btn btn-sm btn-success restock-btn">Restock Now</button>`;
      document.getElementById('alerts').appendChild(newAlert);

      newAlert.querySelector('.restock-btn').addEventListener('click', function () {
        newAlert.classList.remove('low-stock');
        newAlert.classList.add('restocked');
        newAlert.innerHTML = "✅ <strong>Item has been restocked!</strong>";
      });
    }, 4000);
  });
</script>

<!-- Chatbot Button & Popup -->
<style>
  #chat-icon {
    position: fixed;
    bottom: 25px;
    right: 25px;
    background-color: #28a745;
    color: white;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    font-size: 28px;
    text-align: center;
    line-height: 60px;
    cursor: pointer;
    z-index: 9999;
  }

  #chat-popup {
    display: none;
    position: fixed;
    bottom: 95px;
    right: 25px;
    width: 300px;
    max-height: 400px;
    background: white;
    border: 1px solid #ddd;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    z-index: 9998;
    overflow: hidden;
    flex-direction: column;
  }

  #chat-header {
    background-color: #28a745;
    color: white;
    padding: 10px 15px;
    font-weight: bold;
  }

  #chat-body {
    flex: 1;
    padding: 10px;
    overflow-y: auto;
    max-height: 250px;
  }

  .chat-message {
    margin: 5px 0;
  }

  .bot {
    color: #000;
  }

  .user {
    text-align: right;
    color: #007bff;
  }

  #chat-input {
    display: flex;
    border-top: 1px solid #ddd;
  }

  #chat-input input {
    flex: 1;
    border: none;
    padding: 10px;
  }

  #chat-input button {
    border: none;
    background: #28a745;
    color: white;
    padding: 10px 15px;
  }
</style>

<div id="chat-icon" onclick="toggleChat()">💬</div>

<div id="chat-popup">
  <div id="chat-header">Supplier Chat Support</div>
  <div id="chat-body"></div>
  <div id="chat-input">
    <input type="text" id="user-input" placeholder="Type your message..." />
    <button onclick="sendMessage()">➤</button>
  </div>
</div>

<script>
  function toggleChat() {
    const chatPopup = document.getElementById('chat-popup');
    chatPopup.style.display = chatPopup.style.display === 'block' ? 'none' : 'block';
  }

  function sendMessage() {
    const input = document.getElementById("user-input");
    const message = input.value.trim();
    if (!message) return;

    appendMessage(message, "user");

    // Simulate bot response
    setTimeout(() => {
      const response = getBotReply(message);
      appendMessage(response, "bot");
    }, 800);

    input.value = "";
  }

  function appendMessage(msg, sender) {
    const msgDiv = document.createElement("div");
    msgDiv.className = chat-message ${sender};
    msgDiv.innerText = msg;
    document.getElementById("chat-body").appendChild(msgDiv);
    document.getElementById("chat-body").scrollTop = document.getElementById("chat-body").scrollHeight;
  }

  function getBotReply(input) {
    const lower = input.toLowerCase();
    if (lower.includes("hello") || lower.includes("hi")) return "Hello! How can I assist you today?";
    if (lower.includes("stock")) return "You can view low stock alerts from the 'Restock Alerts' section.";
    if (lower.includes("order")) return "Go to 'Order Management' to view or accept orders.";
    if (lower.includes("add product")) return "Use 'Manage Listings' to add or edit your items.";
    return "Sorry, I didn't understand that. Can you please rephrase?";
  }
</script>

</body>
</html>