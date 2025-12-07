<?php
include 'template/data.php';
$pattern = $indexed['Business Logic'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Business logic implements the entities and critical business rules of an organization.</dd>
    </dl>

    <figure><img alt="" src="images/business-logic.drawio.png"><figcaption>Business Logic</figcaption></figure>

    <p>Business logic is part of the Model in MVC, and Entity in ECB</p>

    <h2>How does it work?</h2>
    <p>
        This code expresses the <a href="entity">entities</a> and business rules of the organization. A business rule would be part of the organization whether it is implemented in the application or not. It would be the same in any application. The business rules can be part of the entity classes.
    </p>
    <p>
        Business logic has no dependencies on other types of code, not even application logic.
    </p>
    <p>
        Business logic can be modeled with a <a href="https://en.wikipedia.org/wiki/Domain_model">domain model</a>
    </p>

    <h2>Examples of entities</h2>
    <ul>
        <li>Customer (CustomerID, FirstName, LastName, Email, Address)
        <li>Order (OrderID, CustomerID, OrderDate, TotalAmount)
        <li>Product (ProductID, Name, Description, Price, StockQuantity)
        <li>Employee (EmployeeID, FirstName, LastName, Position, HireDate)
        <li>Invoice (InvoiceID, OrderID, IssueDate, DueDate, AmountDue)
        <li>Patient (PatientID, FirstName, LastName, DateOfBirth, Gender)
        <li>Appointment (AppointmentID, PatientID, DoctorID, AppointmentDate, Duration)
        <li>Loan (LoanID, CustomerID, LoanAmount, InterestRate, Term)
        <li>InventoryItem (ItemID, Name, Description, QuantityInStock, UnitPrice)
        <li>Project (ProjectID, ProjectName, StartDate, EndDate, ProjectManager)
        <li>Flight (FlightNumber, DepartureAirport, ArrivalAirport, DepartureTime, ArrivalTime)
        <li>Reservation (ReservationID, CustomerID, FlightNumber, SeatNumber, ReservationDate)
    </ul>


    <h2>Examples of business rules</h2>
    <ul>
        <li>Validation Rules (Example: In an e-commerce application, a business rule might state that the quantity of items in a customer's shopping cart must be greater than zero before they can proceed to checkout.)
        <li>Price Calculation Rules (Example: A financial application might have a business rule specifying how interest is calculated on a loan based on factors such as the principal amount, interest rate, and loan term.)
        <li>Discount rules (Example: A retail system might have rules that determine eligibility for discounts based on criteria such as the total purchase amount, customer loyalty status, or specific promotional campaigns.)
        <li>Credit Approval Rules (Example: In a banking application, there might be business rules that define the criteria for approving a credit application, considering factors such as credit score, income, and debt-to-income ratio.)
        <li>Inventory Management Rules (Example: A rule in an inventory management system might dictate that a product cannot be shipped if its quantity in stock is below a certain threshold to avoid stockouts.)
        <li>Regulatory Compliance Rules (Example: A healthcare application must adhere to regulatory rules regarding the privacy and security of patient data, ensuring compliance with laws like HIPAA.)
        <li>Appointment Scheduling Rules (Example: A scheduling application might have rules that prevent double booking of resources or dictate the lead time required for scheduling appointments.)
        <li>Tax Calculation Rules (Example: An accounting system may implement rules for calculating taxes based on regional tax rates, taxable income, and applicable tax exemptions.)
        <li>Shipping Rules (Example: An e-commerce platform might have rules governing shipping options, costs, and delivery times based on factors such as the destination, shipping method, and order value.)
        <li>Employee Leave Approval Rules (Example: In a human resources system, rules might define how employee leave requests are processed, considering factors like available leave balances, company policies, and team workload.)
        <li>Product Return Rules (Example: An online marketplace might have rules for handling product returns, specifying conditions under which returns are accepted, return windows, and refund processes.)
        <li>Customer Eligibility Rules (Example: A subscription-based service might have rules to determine customer eligibility for specific subscription tiers, considering factors like payment history or account status.)
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Business_logic">Wikipedia on business logic<a>
    </ul>
</section>

<?php
include 'template/footer.php';
