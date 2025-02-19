/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pc;

import ihm.MainFrame;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Scanner;

/**
 *
 * @author thouverez
 */
public class PCChen {

    private Dresseur utilisateur;

//    private static String URL = "jdbc:mysql://127.0.0.1/pokemon-bdd?useUnicode=true&useJDBCCompliantTimezoneShift=true&useLegacyDatetimeCode=false&serverTimezone=UTC";
//    private static String LOGIN = "bthouverez";
//    private static String PASSWORD = "123456";
    private static String URL = "jdbc:postgresql://localhost:5432/postgres";
    private static String LOGIN = "postgres";
    private static String PASSWORD = "loul22";
    private Connection connection;
    private Statement stmt;

    public PCChen() throws SQLException {

        this.connection();
    }

    public boolean connection() {
        System.out.println("Connection au système...");
//        try {
//            Class.forName("com.mysql.cj.jdbc.Driver");
//            //Class.forName("org.postgresql.Driver");
//        } catch (ClassNotFoundException e) {
//            System.out.println("Ou est MySQL JDBC Driver?");
//            e.printStackTrace();
//            return false;
//        }
        try {
            Class.forName("org.postgresql.Driver");
        } catch (ClassNotFoundException e) {
            System.out.println("Ou est PostgreSQL Driver?");
            e.printStackTrace();
            return false;
        }
        this.connection = null;
        try {
            DriverManager.setLogWriter(null);
            this.connection = DriverManager.getConnection(URL, LOGIN, PASSWORD);
        } catch (SQLException e) {
            System.out.println("Connexion ratée! Lisez la suite:");
            e.printStackTrace();
            return false;
        }

        if (connection == null) {
            return false;
        }
        return true;
    }

    public ArrayList<Pokemon> getPokemonDetenus() throws SQLException {
        ArrayList<Pokemon> res = new ArrayList<>();
        try {
            this.stmt = this.connection.createStatement();
            String query = "SELECT * FROM pokemon p "
                    + "NATURAL JOIN detientpokemon WHERE id_dress = " + this.utilisateur.getId() + ";";
            ResultSet rs = stmt.executeQuery(query);
            while (rs.next()) {
                int id = rs.getInt("id_pok");
                int lvl = rs.getInt("lvl_pok");
                String nom = rs.getString("nom_pok");
                Pokemon p = new Pokemon(id, nom, lvl);
                res.add(p);
            }
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            if (stmt != null) {
                this.stmt.close();
            }
        }
        return res;
    }

    public ArrayList<Pokemon> getPokemonBoite(int nb) throws SQLException {
        ArrayList<Pokemon> res = new ArrayList<>();
        try {
            nb++;
            this.stmt = this.connection.createStatement();
            String query = "SELECT * FROM pokemon p "
                    + "NATURAL JOIN stockepokemon WHERE id_dress = " + this.utilisateur.getId()
                    + " AND num_boite = " + nb + ";";
            ResultSet rs = stmt.executeQuery(query);
            while (rs.next()) {
                int id = rs.getInt("id_pok");
                int lvl = rs.getInt("lvl_pok");
                String nom = rs.getString("nom_pok");
                Pokemon p = new Pokemon(id, nom, lvl);
                res.add(p);
            }
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            if (stmt != null) {
                this.stmt.close();
            }
        }
        return res;
    }

    
    public boolean connecteDresseur(String d) throws SQLException {
        try {
            this.stmt = this.connection.createStatement();
            String query = "SELECT * FROM dresseur "
                    + "WHERE nom_dress ILIKE '" + d + "';";
            ResultSet rs = stmt.executeQuery(query);
            while (rs.next()) {
                this.utilisateur = new Dresseur(rs.getInt("id_dress"), rs.getString("nom_dress"));
                return true;
            }
            return false;
        } catch (SQLException e) {
            e.printStackTrace();
            return false;
        }
    }


    public boolean stockerPokemon(Pokemon p, int boite) {
        return true;
    }

    public boolean retirerPokemon(Pokemon p, int boite) {
        return true;
    }
}
