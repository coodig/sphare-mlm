# Standard Binary MLM Compensation Plan

Yeh document (package-based) binary MLM plan ke structure, payouts, aur business rules ko define karta hai.

---

## 1. Activation Packages

Commission hamesha **Business Volume (BV)** par calculate hota hai. Is plan ke liye, hum simplicity ke liye maan rahe hain ki **₹1 = 1 BV**.

| Package Name | Price (INR) | Business Volume (BV) |
| :--- | :--- | :--- |
| **Basic** | ₹1,000 | 1,000 BV |
| **Standard** | ₹5,000 | 5,000 BV |
| **Professional** | ₹10,000 | 10,000 BV |
| **Founder** | ₹25,000 | 25,000 BV |

---

## 2. Payouts (Types of Earning)

Is plan mein 3 mukhya tarah ki income hain:

### 1. Direct Sponsor Bonus (Active Income)

Yeh bonus user ko tab milta hai jab woh kisi ko directly apne referral link se join karwata hai.

* **Logic:** User ko join kiye gaye package ke **BV ka 10%** milega.
* **Payout:** Yeh commission instant ya daily closing par wallet mein credit ho jaayega.
* **Example:**
    * Aapne (User A) ne B ko join karwaya.
    * B ne **Professional Package** (10,000 BV) liya.
    * Aapko instant payout milega: `10% of 10,000 BV = ₹1,000`.

### 2. Binary Matching Bonus (Team Income)

Yeh plan ki core income hai, jo team ki performance par milti hai.

* **Logic:** Har user ke neeche ek **Left Leg** aur ek **Right Leg** hoti hai. Dono legs mein BV jama hota hai.
* **Matching:** Payout ke time (jaise daily closing par), system **Weaker Leg** (kam BV waali leg) ko **Power Leg** (zyada BV waali leg) se match karta hai.
* **Ratio:** `1:1`
* **Payout:** User ko matched BV ka **10%** commission milta hai.
* **Example Calculation (Daily Closing):**
    * **Aapki Left Leg mein Total BV:** 50,000 BV
    * **Aapki Right Leg mein Total BV:** 30,000 BV
    * ---
    * **Weaker Leg:** Right Leg (30,000 BV).
    * **Matching:** 30,000 BV (Right) ko 30,000 BV (Left) se match kiya jaayega.
    * **Commission:** `10% of 30,000 BV = ₹3,000`.
* **Carry Forward (Agle din ke liye):**
    * **Left Leg:** `50,000 - 30,000 (matched) = 20,000 BV`
    * **Right Leg:** `30,000 - 30,000 (matched) = 0 BV`
    * *(Agle din Left Leg 20,000 BV se shuru hogi)*

### 3. Rewards & Ranks (Motivation)

Yeh one-time rewards hain jo total business milestones poora karne par milte hain.

* **Logic:** Rewards user ke **Total Cumulative Matched BV** (ab tak ka total matched business) par based hote hain.
* **Example Ranks:**
    * **Star:** 1,00,000 BV Matching = Smart Watch
    * **Pearl:** 5,00,000 BV Matching = Laptop
    * **Ruby:** 20,00,000 BV Matching = Motorcycle
    * **Diamond:** 1,00,00,000 BV Matching = Car

---

## 3. Rules & Conditions (Software Logic)

Yeh rules company ko stable rakhne ke liye sabse zaroori hain.

### 1. Capping (Daily Limit)

Yeh **Binary Matching Bonus (Income 2)** par ek daily limit hai taaki company kabhi loss mein na jaaye.

* **Logic:** Ek user ek din mein kitna max kama sakta hai, yeh uske khud ke purchase kiye gaye package par depend karega.
* **Rule:** **Daily Capping = User ke Package ka Price.**
    * **Basic (₹1,000):** Aapki daily binary income ₹1,000 se zyada nahi ho sakti.
    * **Standard (₹5,000):** Aapki daily binary income ₹5,000 se zyada nahi ho sakti.
    * **Professional (₹10,000):** Aapki daily binary income ₹10,000 se zyada nahi ho sakti.
    * **Founder (₹25,000):** Aapki daily binary income ₹25,000 se zyada nahi ho sakti.
* **Flush-out:** Agar aapka ₹1,000 ka package hai aur aapka commission ₹3,000 ban jaata hai, toh aapko sirf ₹1,000 milenge. Baaki ka ₹2,000 (aur us din ka saara BV) **flush (zero)** ho jaayega. Yeh user ko bada package lene ke liye motivate karta hai.

### 2. Binary Activation

* **Logic:** Binary Matching Bonus (Income 2) shuru karne ke liye user ko active hona zaroori hai.
* **Rule:** User ko apne account se **kam se kam 1 direct sponsor Left Leg mein** aur **1 direct sponsor Right Leg mein** karna zaroori hai. Iske baad hi uski binary income shuru hogi.

### 3. Payout Deductions

* **Logic:** Har payout se company ka profit/service charge.
* **Rule:** Har withdrawal request par **10% deduction** hoga.
    * `5%` Admin Charge (Company ka profit)
    * `5%` TDS (Tax, jo government ko jaata hai)

---

## Plan Summary

"10% Direct Bonus, 10% Binary Matching Bonus (1:1 Ratio), with daily capping equal to your package value."
