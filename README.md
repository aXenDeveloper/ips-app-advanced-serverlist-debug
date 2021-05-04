# (aXen) Advanced Server List - Debug Tool

This tool is working only in your own server, it **doesn't work in the IPS cloud**!

## 🏷️ Requirements

- [(aXen) Advanced Server List](https://github.com/aXenDeveloper/ips-app-advanced-serverlist)
- [IPS Community Suite: 4.5 version](https://invisioncommunity.com/)
- PHP 7.2+
- [Bzip2](https://www.php.net/manual/en/book.bzip2.php) - Used for A2S Compressed responses,
- ❗❗ Unlocked external ports on the website server

## 🧰 Install

1. Download **debug.php** file from this repository,
2. Edit **debug.php** file:

```
$server = [
  'type' => 'teamspeak3',
  'host' => '54.38.143.65:9987'
];

// Query port
$server['options'] = [
  'query_port' => 10011
];
```

If you don't know about server type go to section [Servers Type](https://github.com/aXenDeveloper/ips-app-advanced-serverlist-debug#-servers-type).

2. Upload file **debug.php** in folder:

```
applications\axenserverlist\interface
```

3. Open this file in your browser:  
   For example path:

```
https://localhost/applications/axenserverlist/interface/debug.php
```

## 💻 Servers type

| Name                                   | Type           |
| -------------------------------------- | -------------- |
| ARK: Survival Evolved                  | arkse          |
| Arma3                                  | arma3          |
| Battlefield 2                          | bf2            |
| Battlefield 3                          | bf3            |
| Battlefield 4                          | bf4            |
| Battlefield 1942                       | bf1942         |
| Battlefield Bad Company 2              | bfbc2          |
| Battlefield Hardline                   | bfh            |
| Call of Duty                           | cod            |
| Call of Duty 2                         | cod2           |
| Call of Duty 4                         | cod4           |
| Call of Duty: United Offensive         | coduo          |
| Call of Duty: World at War             | codwaw         |
| Conan Exiles                           | conanexiles    |
| Contagion                              | contagion      |
| Counter-Strike 1.6                     | cs16           |
| Counter-Strike: Condition Zero         | cscz           |
| Counter-Strike: Global Offensive       | csgo           |
| Counter-Strike: Source                 | css            |
| DayZ Standalone                        | dayz           |
| DayZ Mod                               | dayzmod        |
| Garry's Mod                            | gmod           |
| GRAV Online                            | grav           |
| GTA Five M                             | gta5m          |
| Grand Theft Auto Network               | gtan           |
| Half Life 2: Deathmatch                | hl2dm          |
| Hurtworld                              | hurtworld      |
| Insurgency                             | insurgency     |
| Star Wars Jedi Knight: Jedi Academy    | jediacademy    |
| Star Wars Jedi Knight II: Jedi Outcast | jedioutcast    |
| Just Cause 2 Multiplayer               | justcause2     |
| Just Cause 3                           | justcause3     |
| Left 4 Dead                            | l4d            |
| Left 4 Dead 2                          | l4d2           |
| Minecraft                              | minecraft      |
| Medal of honor: Allied Assault         | mohaa          |
| Multi Theft Auto                       | mta            |
| Mumble Server                          | mumble         |
| Natural Selection 2                    | ns2            |
| Quake 2 Server                         | quake2         |
| Quake 3 Server                         | quake3         |
| Quake Live                             | quakelive      |
| Red Orchestra 2                        | redorchestra2  |
| Rust                                   | rust           |
| San Andreas Multiplayer                | samp           |
| 7 Days to Die                          | sevendaystodie |
| The Ship                               | ship           |
| Squad                                  | squad          |
| StarMade                               | starmade       |
| Teamspeak 3                            | teamspeak3     |
| Teeworlds Server                       | teeworlds      |
| Terraria                               | terraria       |
| Team Fortress 2                        | tf2            |
| Tibia                                  | tibia          |
| Tshock                                 | tshock         |
| Unreal 2                               | unreal2        |
| Unturned                               | unturned       |
| Unreal Tournament 3                    | ut3            |
| Unreal Tournament 2004                 | ut2004         |
| Ventrilo                               | ventrilo       |
| Warsow                                 | warsow         |
| World Opponent Network                 | won            |
