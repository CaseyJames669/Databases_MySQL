SELECT LGCUSTOMER.CUST_CODE, LGCUSTOMER.CUST_FNAME, LGCUSTOMER.CUST_LNAME, LGINVOICE.EMPLOYEE_ID INTO Temp24A
FROM LGCUSTOMER INNER JOIN LGINVOICE ON LGCUSTOMER.CUST_CODE = LGINVOICE.CUST_CODE
WHERE (((LGINVOICE.EMPLOYEE_ID)=83649));