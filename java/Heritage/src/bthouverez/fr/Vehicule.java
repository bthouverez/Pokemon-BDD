package bthouverez.fr;

public class Vehicule {
    private String marque;
    private int nbRoues;

    public Vehicule() {
        System.out.println("Construction Vehicule");
        this.marque = "S";
        this.nbRoues = 4;
    }
    public Vehicule(String m, int n) {
        System.out.println("Construction parametree Vehicule");
        this.marque = m;
        this.nbRoues = n;
    }

    @Override
    public String toString() {
        return "Vehicule{" +
                "marque='" + marque + '\'' +
                ", nbRoues=" + nbRoues +
                '}';
    }
}
