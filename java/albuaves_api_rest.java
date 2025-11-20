import java.sql.Connection;  
import java.sql.DriverManager;  
import java.sql.ResultSet;  
import java.sql.Statement;  
public class albuaves_api_rest{
  public static void main(String[] args) 
  {  
     Connection connection = null;  
     ResultSet resultSet = null;  
     Statement statement = null;  

     try 
     {  
         Class.forName("org.sqlite.JDBC");  
         connection = DriverManager.getConnection("jdbc:sqlite:../db/albuaves.db");  
         statement = connection.createStatement();  
         resultSet = statement  
                 .executeQuery("SELECT * FROM birds");  
         while (resultSet.next()) 
         {  
             System.out.println("Nombre del ave:"  
                     + resultSet.getString("common_name"));  
         }  
     } 
     catch (Exception e) 
     {  
         e.printStackTrace();  
     }
     finally 
     {  
         try 
         {  
             resultSet.close();  
             statement.close();  
             connection.close();  
         } 
         catch (Exception e) 
         {  
             e.printStackTrace();  
         }  
     }  
 }  
}
