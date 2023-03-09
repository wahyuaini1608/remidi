/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/GUIForms/JFrame.java to edit this template
 */
package com.mycompany.aini_ukk2023;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableModel;

/**
 *
 * @author LAB-RPL2
 */
public class form_data extends javax.swing.JFrame {
    Connection koneksi;
    String id = "";
    /**
     * Creates new form form_data
     */
    public form_data() {
        initComponents();
        koneksi();
        tampilutama();
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel1 = new javax.swing.JLabel();
        jLabel2 = new javax.swing.JLabel();
        simpan = new javax.swing.JButton();
        edit = new javax.swing.JButton();
        reset = new javax.swing.JButton();
        hapus = new javax.swing.JButton();
        jScrollPane1 = new javax.swing.JScrollPane();
        tabel = new javax.swing.JTable();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        getContentPane().setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        jLabel1.setFont(new java.awt.Font("Segoe UI", 1, 14)); // NOI18N
        jLabel1.setText("SMKN 1 SAYUNG");
        getContentPane().add(jLabel1, new org.netbeans.lib.awtextra.AbsoluteConstraints(210, 10, -1, -1));

        jLabel2.setText("Pilih Aksi");
        getContentPane().add(jLabel2, new org.netbeans.lib.awtextra.AbsoluteConstraints(10, 50, -1, -1));

        simpan.setText("Simpan");
        getContentPane().add(simpan, new org.netbeans.lib.awtextra.AbsoluteConstraints(10, 80, -1, -1));

        edit.setText("Edit");
        getContentPane().add(edit, new org.netbeans.lib.awtextra.AbsoluteConstraints(10, 110, 70, -1));

        reset.setText("Reset");
        getContentPane().add(reset, new org.netbeans.lib.awtextra.AbsoluteConstraints(10, 140, 70, -1));

        hapus.setText("Hapus");
        hapus.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                hapusActionPerformed(evt);
            }
        });
        getContentPane().add(hapus, new org.netbeans.lib.awtextra.AbsoluteConstraints(10, 170, -1, -1));

        tabel.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null, null, null, null},
                {null, null, null, null},
                {null, null, null, null},
                {null, null, null, null},
                {null, null, null, null}
            },
            new String [] {
                "Title 1", "Title 2", "Title 3", "Title 4"
            }
        ));
        jScrollPane1.setViewportView(tabel);

        getContentPane().add(jScrollPane1, new org.netbeans.lib.awtextra.AbsoluteConstraints(100, 70, -1, 120));

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void hapusActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_hapusActionPerformed
        hapus();
    }//GEN-LAST:event_hapusActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(form_data.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(form_data.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(form_data.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(form_data.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new form_data().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton edit;
    private javax.swing.JButton hapus;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JButton reset;
    private javax.swing.JButton simpan;
    private javax.swing.JTable tabel;
    // End of variables declaration//GEN-END:variables
private void koneksi(){
    try {
        String server = "jdbc:mysql://localhost:3306/db_ukk_lsp_wahyu";
        String user = "root";
        String pass = "";
        
        DriverManager.registerDriver(new com.mysql.cj.jdbc.Driver());
        koneksi = DriverManager.getConnection(server, user, pass);
    } catch (Exception e) {
        JOptionPane.showMessageDialog(null, e);
    }
}

private void tampilutama(){
    DefaultTableModel data = (DefaultTableModel) tabel.getModel();
    data.setRowCount(0);
    
    try {
        String sql = "SELECT * FROM tb_utama";
        ResultSet res = koneksi.createStatement().executeQuery(sql);
        
        while (res.next()) {
            data.addRow(new Object[]{res.getString(1),res.getString(2),res.getString(3),res.getString(4)});
            
        }
        tabel.setModel(data);
    } catch (Exception e) {
        JOptionPane.showMessageDialog(null, e);
    }
}
private void hapus(){
    int row = tabel.getSelectedRow();
    String id_transaksi = tabel.getModel().getValueAt(row, 0).toString();
    
    try {
        String sql = "DELETE FROM tb_utama WHERE id_transaksi = "+id_transaksi;
        int res = koneksi.createStatement().executeUpdate(sql);
        
        if (res > -1) {
            tampilutama();  
        }
    } catch (Exception e) {
        JOptionPane.showMessageDialog(null, e);
    }
}
}