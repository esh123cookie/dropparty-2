# DropParty
Schedule DropParties on your server with this PocketMine Plugin!
Simply setup the config.yml and enjoy automatic DropParties on your server!

Config.yml
```
---
World: world
Time: 10
Duration: 60
Message.Started: §a[§6Drop§bParty§a] §dHas started! Do /spawn to get the items at
  the §5DropParty
Message.Ended: §a[§6Drop§bParty§a] §dHas ended! Good game all.
Message.Countdown: §a[§6Drop§bParty§a] §dis starting in §5{time} §dminutes.
Popup.Enabled: true
Popup.Message: §a[§6Drop§bParty§a] §dItems are dropping! §5Do /spawn to get those
  items!
Coordinates:
  X: 0
  "Y": 0
  Z: 0
Items:
- 57
- 42
- 22
- 41
...
```
Note that duration is in seconds and time is how long before drop party starts in minute