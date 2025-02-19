package bthouverez.fr;

import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.IOException;
import java.io.File;
import javafx.scene.media.Media;
import javafx.scene.media.MediaPlayer;

public class MainWindow extends JFrame {
    private JPanel content;
    private JLabel artiste;
    private JLabel album;
    private JLabel genre;
    private JLabel titre;
    private JButton btnPlay;
    private JButton btnPause;
    private JButton btnSuivant;
    private JButton btnPrecedent;

    private Playlist playlist;


    public MainWindow() {
        super();
        this.setContentPane(this.content);
        this.pack();
        this.playlist = new Playlist();
        setExtendedState(JFrame.MAXIMIZED_BOTH);
        btnSuivant.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent actionEvent) {
                playlist.suivant();
                update();
            }
        });
        btnPrecedent.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent actionEvent) {
                playlist.precedent();
                update();
            }
        });
    }

    public Playlist getPlaylist() {
        return playlist;
    }

    public void testMp3() {
        String bip = "C:\\Users\\basti\\Music\\Liar.mp3";
        Media hit = new Media(new File(bip).toURI().toString());
        MediaPlayer mediaPlayer = new MediaPlayer(hit);
        mediaPlayer.play();
    }

    public void update() {
        Chanson c = this.playlist.chansonCourante();
        this.artiste.setText(c.getArtiste());
        this.album.setText(c.getAlbum());
        this.genre.setText(c.getGenre());
        this.titre.setText(c.getNom());
    }
}
