package bthouverez.fr;

public class Chanson {
    private int id;
    private String nom;
    private String artiste;
    private String album;
    private String genre;
    private int duree;

    public Chanson() {
        this.id = -1;
        this.nom = "Unknown";
        this.artiste = "Unknown";
        this.album = "Unknown";
        this.genre = "Unknown";
        this.duree = -1;
    }

    public Chanson(int id, String nom, String artiste, String album, String genre, int duree) {
        this.id = id;
        this.nom = nom;
        this.artiste = artiste;
        this.album = album;
        this.genre = genre;
        this.duree = duree;
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

    public String getArtiste() {
        return artiste;
    }

    public void setArtiste(String artiste) {
        this.artiste = artiste;
    }

    public String getAlbum() {
        return album;
    }

    public void setAlbum(String album) {
        this.album = album;
    }

    public String getGenre() {
        return genre;
    }

    public void setGenre(String genre) {
        this.genre = genre;
    }

    public int getDuree() {
        return duree;
    }

    public void setDuree(int duree) {
        this.duree = duree;
    }

    @Override
    public String toString() {
        return "Chanson{" +
                "id=" + id +
                ", nom='" + nom + '\'' +
                ", artiste='" + artiste + '\'' +
                ", album='" + album + '\'' +
                ", genre='" + genre + '\'' +
                ", duree=" + duree +
                '}';
    }
}
