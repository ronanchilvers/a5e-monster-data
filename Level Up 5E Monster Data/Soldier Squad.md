---
statblock: true
name: 'Soldier Squad'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Humanoid
cr: 5
ac: 16
hp: 97
hit_dice: '15d8 + 30'
speed: '30 ft.'
stats:
    - 14
    - 12
    - 14
    - 10
    - 10
    - 10
skillsaves:
    - { perception: 3 }
    - { survival: 3 }
senses: 'passive Perception 13'
languages: 'any one'
traits:
    - { name: 'Area Vulnerability', desc: 'The squad takes double damage from any effect that targets an area.' }
    - { name: 'Squad Dispersal', desc: 'When the squad is reduced to 0 hit points, it turns into 2 (1d4) soldiers with 9 hit points each.' }
    - { name: Squad, desc: 'The squad is composed of 5 or more soldiers. If it is subjected to a spell, attack, or other effect that affects only one target, it takes any damage but ignores other effects. It can share its space with Medium or smaller creatures or objects. The squad can move through any opening large enough for one Medium creature without squeezing.' }
actions:
    - { name: Spears, desc: 'Melee or Ranged Weapon Attack: +4 to hit, reach 5 ft. or range 20/60 ft., one target. Hit: 31 (6d6 + 10) piercing damage, or half damage if the squad is bloodied.' }
'bonus actions':
    - { name: 'Tactical Movement', desc: "Until the end of the squad's turn, their Speed is halved and their movement doesn't provoke opportunity attacks." }
    - { name: 'Soldier squads march to war and garrison fortifications', desc: '' }

---
```statblock
monster: Soldier Squad
```
