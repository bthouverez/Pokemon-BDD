package bthouverez.fr;

public class Attaque {
    private int id;
    private String nom;
    private int degats;

    public Attaque() {
        this.id = -1;
        this.nom = "unknown";
        this.degats = -1;
    }
    public Attaque(int id, String nom, int degats) {
        this.id = id;
        this.nom = nom;
        this.degats = degats;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public int getDegats() {
        return degats;
    }

    public void setDegats(int degats) {
        this.degats = degats;
    }

    @Override
    public String toString() {
        return "Attaque{" +
                "id=" + id +
                ", nom='" + nom + '\'' +
                ", degats=" + degats +
                '}';
    }
}
