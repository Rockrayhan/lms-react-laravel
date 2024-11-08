import React from 'react';
import { Document, Page, Text, View, StyleSheet, PDFViewer } from '@react-pdf/renderer';

const styles = StyleSheet.create({
  page: {
    flexDirection: 'row',
    backgroundColor: '#E4E4E4',
    padding: 20,
    fontSize: 12,
    
  },
  section: {
    margin: 10,
    padding: 10,
    flexGrow: 1,
    position:'relative',
    top:'100',
    right: '70',
    
  },
  HeaderSection:{
    position:'relative',
    top:'60',
    left: '200',
  },
  header: {
    fontSize: 20,
    marginLeft:'40px',
    
  },
  table: {
    display: 'table',
    width: 'auto',
    borderStyle: 'solid',
    borderWidth: 1,
    borderRightWidth: 0,
    borderBottomWidth: 0,
  },
  tableRow: {
    margin: 'auto',
    flexDirection: 'row',
  },
  tableCol: {
    width: '100px',
    borderStyle: 'solid',
    borderWidth: 1,
    padding:'3px'
  },
  footer:{
    position:'relative',
    top:'200',
    right: '250',
    fontSize:'15px',
  }
});

const Invoice = ({ orders }) => {
  console.log(orders);
  return (
    <PDFViewer style={{ width: '100%', height: '100vh' }}>
      <Document>
        <Page size="A4" style={styles.page}>
          <View style={styles.HeaderSection}>
            <Text style={styles.header}>Invoice</Text>
            <Text>Student Name: {orders[0].student_name}</Text>
          </View> 
          <View style={styles.section}>
            <View style={styles.table}>
              <View style={styles.tableRow}>
                {/* <View style={styles.tableCol}><Text>#</Text></View> */}
                <View style={styles.tableCol}><Text>Course Name</Text></View>
                <View style={styles.tableCol}><Text>Purchase Date</Text></View>
                <View style={styles.tableCol}><Text>Payment Method</Text></View>
                <View style={styles.tableCol}><Text>Price</Text></View>
                <View style={styles.tableCol}><Text>Transaction ID</Text></View>
              </View>
              {orders.map((item, index) => (
                <View key={index} style={styles.tableRow}>
                  {/* <View style={styles.tableCol}><Text>{index + 1}</Text></View> */}
                  <View style={styles.tableCol}><Text>{item.product_name}</Text></View>
                  <View style={styles.tableCol}><Text>{new Date(item.created_at).toLocaleDateString()}</Text></View>
                  <View style={styles.tableCol}><Text>{item.payment}</Text></View>
                  <View style={styles.tableCol}><Text>{item.price}</Text></View>
                  <View style={styles.tableCol}><Text>{item.t_id}</Text></View>
                </View>
              ))}
            </View>
          </View>
          <View style={styles.footer}>
            <Text>@2024 - EKTU KHANI TECH</Text>
          </View>
        </Page>
      </Document>
    </PDFViewer>
  );
};

export default Invoice;
