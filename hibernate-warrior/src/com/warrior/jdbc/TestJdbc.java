package com.warrior.jdbc;

import java.sql.Connection;
import java.sql.DriverManager;

public class TestJdbc {

	public static void main(String[] args) {
		String jdbcUrl = "jdbc:mysql://localhost:3306/student-table?useSSL=false";
		String user = "student";
		String pass= "student";
				
		try {
			System.out.println("Connecting to database" + jdbcUrl);
			Connection myConn = DriverManager.getConnection(jdbcUrl, user, pass);
			System.out.println("Connection Succesful!!!!");

	}
		catch(Exception exc) {
			exc.printStackTrace();
		}
    }
}

