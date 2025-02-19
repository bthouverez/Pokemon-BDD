package bthouverez.fr;

import java.util.ArrayList;

public class Playlist extends ArrayList<Chanson> {
    private int id;
    private String nom;
    private int chansonCourante;

    public Playlist() {
        super();
        this.id = -1;
        this.nom = "Unknown";
        this.chansonCourante = 0;
    }

    public Playlist(String nom) {
        super();
        this.id = -1;
        this.nom = nom;
        this.chansonCourante = 0;
    }

    public Playlist(int id, String nom) {
        super();
        this.id = id;
        this.nom = nom;
        this.chansonCourante = 0;
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

    public void ajouterChanson(Chanson c) {
        this.add(c);
    }

    public Chanson suivant() {
        this.chansonCourante++;
        return this.get(this.chansonCourante);
    }

    public Chanson precedent() {
        this.chansonCourante--;
        return this.get(this.chansonCourante);
    }

    public Chanson chansonCourante() {
        return this.get(this.chansonCourante);
    }

    @Override
    public String toString() {
        return "Playlist{" +
                "id=" + id +
                ", nom='" + nom + '\'' +
                '}';
    }
}
