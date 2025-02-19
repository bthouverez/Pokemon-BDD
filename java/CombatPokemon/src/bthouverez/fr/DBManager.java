package bthouverez.fr;

import java.sql.*;
import java.util.ArrayList;

public class DBManager {
    private static final String URL = "jdbc:mysql://127.0.0.1/pokemon?useUnicode=true&useJDBCCompliantTimezoneShift=true&useLegacyDatetimeCode=false&serverTimezone=UTC";
    private static final String LOGIN = "bthouverez";
    private static final String PASSWORD = "321654";
    private Connection connection;
    private Statement stmt;

    public DBManager() {
        this.connection();
    }

    public boolean connection() {
        System.out.println("Connection au système...");
        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
        } catch (ClassNotFoundException e) {
            System.out.println("Ou est MySQL JDBC Driver?");
            e.printStackTrace();
        }

        this.connection = null;
        try {
            DriverManager.setLogWriter(null);
            this.connection = DriverManager.getConnection(URL, LOGIN, PASSWORD);
        } catch (SQLException e) {
            System.out.println("Connexion ratée! Lisez la suite:");
            e.printStackTrace();
        }

        return connection != null;
    }

    public ArrayList<Pokemon> getAllPokemons() throws SQLException {
        ArrayList<Pokemon> res = new ArrayList<>();
        try {
            this.stmt = this.connection.createStatement();
            String query = "SELECT * FROM pokemon";
            ResultSet rs = stmt.executeQuery(query);
            while (rs.next()) {
                int id = rs.getInt("id");
                String nom = rs.getString("nom");
                Pokemon p = new Pokemon(id, nom);
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

    public Pokemon getPokemonById(int id) {
        Pokemon pok = new Pokemon();
        try {
            this.stmt = this.connection.createStatement();
            String query = "SELECT * FROM pokemon WHERE id=?";
            PreparedStatement preparedStatement =
                    connection.prepareStatement(query);
            preparedStatement.setInt(1, id);
            ResultSet rs = preparedStatement.executeQuery();
            rs.next();
            int i = rs.getInt("id");
            String nom = rs.getString("nom");
            pok = new Pokemon(id, nom);
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return pok;
    }
    public Dresseur getDresseurById(int id) {
        Dresseur dress = new Dresseur();
        try {
            this.stmt = this.connection.createStatement();
            String query = "SELECT * FROM dresseur WHERE id=?";
            PreparedStatement preparedStatement =
                    connection.prepareStatement(query);
            preparedStatement.setInt(1, id);
            ResultSet rs = preparedStatement.executeQuery();
            rs.next();
            int i = rs.getInt("id");
            String nom = rs.getString("nom");
            dress = new Dresseur(id, nom);
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return dress;
    }
    public Dresseur getDresseurByName(String name) {
        Dresseur dress = new Dresseur();
        try {
            this.stmt = this.connection.createStatement();
            String query = "SELECT * FROM dresseur WHERE nom=?";
            PreparedStatement preparedStatement =
                    connection.prepareStatement(query);
            preparedStatement.setString(1, name);
            ResultSet rs = preparedStatement.executeQuery();
            rs.next();
            int i = rs.getInt("id");
            String nom = rs.getString("nom");
            dress = new Dresseur(i, nom);
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return dress;
    }

    public ArrayList<Pokemon> getPokemonsDetenus(Dresseur d) {
        ArrayList<Pokemon> res = new ArrayList<>();
        try {
            this.stmt = this.connection.createStatement();
            String query = "SELECT * FROM pokemon p, dresseur d, detientPokemon dp WHERE d.nom = ? AND dp.id_dress = d.id AND dp.id_pok = p.id";
            PreparedStatement preparedStatement =
                    connection.prepareStatement(query);
            preparedStatement.setString(1, d.getNom());
            ResultSet rs = preparedStatement.executeQuery();
            while (rs.next()) {
                int id = rs.getInt("id");
                String nom = rs.getString("nom");
                int level = rs.getInt("lvl");
                Pokemon p = new Pokemon(id, nom);
                p.setNiveau(level);
                res.add(p);
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return res;
    }
/*
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
*/
}
