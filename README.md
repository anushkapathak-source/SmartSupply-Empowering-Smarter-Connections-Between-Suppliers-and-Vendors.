# SmartSupply-Empowering-Smarter-Connections-Between-Suppliers-and-Vendors.
SmartSupply is a full-stack, AI-integrated platform that bridges the gap between suppliers and vendors, enabling smarter, data-driven procurement decisions in real-time. Built with a focus on transparency, efficiency, and trust, the platform simplifies material sourcing
# 🧠 SmartSupply – Empowering Smarter Supplier-Vendor Connections

**SmartSupply** is a smart B2B platform that connects suppliers and vendors efficiently using AI-powered tools. It helps vendors search suppliers based on price, trust score, and location, while suppliers manage listings and analyze demand trends. Built with Python (Flask), HTML, CSS, JS, and SQL, the platform ensures transparent, intelligent, and streamlined procurement.

---

## 🚀 Features
- 🔐 Secure Login/Register for Vendors & Suppliers
- 📦 Supplier Listings (with search & filters)
- 📈 AI-based **Price Forecasting**
- ✅ AI-based **Trust Score Evaluation**
- 🧾 Order History & Analytics Dashboard
- 💬 Smart Chatbot Assistant (coming soon)

---

## 🧠 AI Modules
- **Price Forecasting**: Predicts future prices based on trends using ML.
- **Trust Score**: Evaluates suppliers using order history, delivery, and ratings.

---

## ⚙️ Tech Stack
- **Frontend**: HTML, CSS, JavaScript  
- **Backend**: Python (Flask)  
- **Database**: MySQL / SQLite  
- **AI/ML**: Pandas, NumPy, Scikit-learn  
- **Deployment**: Render / Railway / Vercel

---

## 📂 Project Structure
smartsupply/
├── backend/ # Flask + AI code
├── frontend/ # HTML/CSS/JS files
├── data/ # CSV for training/testing
├── schema.sql # DB tables
├── requirements.txt # Python deps
└── README.md

---

## 🛠️ Run Locally

```bash
git clone https://github.com/your-username/smartsupply.git
cd smartsupply

# Backend
cd backend
python -m venv venv
source venv/bin/activate      # Windows: venv\Scripts\activate
pip install -r requirements.txt
python app.py

# Frontend: Open index.html directly or deploy via Vercel
