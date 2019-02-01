<%@page import="java.sql.*"%>
<head>
<style>
a
{
text-decoration:none
}
</style>
</head>
<body>
<%try
{
	Class.forName("oracle.jdbc.OracleDriver");
	Connection c=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521","system","manager");
	Statement st=c.createStatement();
	String uid=request.getParameter("t1");
	String pwd=request.getParameter("t2");
	int n=st.executeUpdate("select * from alogin where name='"+uid+"' and password='"+pwd+"'");	
	if(n==1)
	{
		String redirectURL = "admin.html";
       		   response.sendRedirect(redirectURL);
	}
	else
	{
		String redirectURL = "alogin.html";
       		   response.sendRedirect(redirectURL);
	}
}
catch(Exception e)
{
	out.println(e.toString());
}
%>
</body>