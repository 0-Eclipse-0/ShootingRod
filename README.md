#ShootingRod
turn a normal Fishing Rod into a Shooting Rod!

##Warning :This plugin is designed for PHP7, please give permissions shootingrod.use and optional : shootingrod.cooldown

##Features :
- Cooldown option.
- Fully customizable(speed & damage).
- Warnings for any wrong option given on config.
- Permissions

##Config :
```
---
#enables cooldown for shooting, true or false.
cooldown: true
#time for cooldown by seconds
cooldown-time: 10

#shot entity type, available types: Arrow, Snowball, Egg
type: Egg

#damage given for getting hitted by the egg/snowball/arrow, set 0 to disable
damage: 7

#speed of the arrow/egg/snowball
speed: 1.5
...
```

##Permissions :
- shootingrod.use : allows to use the shooting rod (magic fishing rod)
- shootingrod.cooldown: gives the player cooldown timings(on config)
