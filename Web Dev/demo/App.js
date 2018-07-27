import React, { Component } from 'react';
import {
  StyleSheet,
  Text,
  View,
  Image,
  AppRegistry,
  ScrollView,
} from 'react-native';
const AVATAR_SIZE = 80;
export default class App extends React.Component {
  render() {
    return (
      <View style={styles.container}>
        <View style={styles.eventDetailsContainer}>
          <Text style={styles.title}>Conference Keynote</Text>
          <Text style={styles.subTitle}>Thursday, May 18</Text>
          <Text style={styles.description}>
            Hear about some stuff that has happened, and some other things that
            people think bout, and want to talk about, for some weird reason, to
            a lot of other people.
          </Text>
        </View>
        <View style={styles.speakerDetailsContainer}>
          <Image
            source={{ uri: 'http://unsplash.it/100/100' }}
            style={styles.avatar}
          />
          <View>
            <Text style={styles.speakerName}>Peter Lazar</Text>
            <Text style={styles.bio}>Speaker Bio</Text>
          </View>
        </View>
      </View>
    );
  }
}
const styles = StyleSheet.create({
  container: { height: '100%', width: '100%' },
  eventDetailsContainer: {
    paddingHorizontal: 30,
    paddingVertical: 30,
    height: '40%',
    borderBottomWidth: StyleSheet.hairlineWidth,
    borderColor: 'grey',
  },
  title: { fontSize: 24, fontWeight: '500', marginBottom: 5 },
  subTitle: { fontSize: 20, fontWeight: '500', marginBottom: 15 },
  description: { fontSize: 16 },
  speakerDetailsContainer: {
    flexDirection: 'row',
    paddingHorizontal: 30,
    paddingVertical: 20,
    alignItems: 'center',
  },
  avatar: {
    height: AVATAR_SIZE,
    width: AVATAR_SIZE,
    borderRadius: AVATAR_SIZE / 2,
    marginRight: 15,
  },
  speakerName: { fontSize: 24, fontWeight: '500', color: 'purple' },
  bio: { fontSize: 18 },
});
