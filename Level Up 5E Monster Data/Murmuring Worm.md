---
statblock: true
name: 'Murmuring Worm'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Aberration
cr: 12
ac: 16
hp: 195
hit_dice: '17d12 + 85'
speed: '40 ft., burrow 20 ft., climb 40 ft., swim 40 ft.'
stats:
    - 20
    - 12
    - 20
    - 8
    - 14
    - 18
damage_immunities: psychic
condition_immunities: prone
senses: 'darkvision 60 ft., tremorsense 60 ft., passive Perception 12'
traits:
    - { name: Amphibious, desc: 'The worm can breathe air and water.' }
    - { name: 'Locate Mind', desc: 'The worm is aware of the location and relative intelligence of all creatures with Intelligence scores greater than 3 within 500 feet.' }
    - { name: 'Maddening Murmurs', desc: 'The worm babbles constantly. A non-aberrant creature that starts its turn within 30 feet and can hear its murmurs makes a DC 14 Intelligence saving throw. On a failure, the creature takes 10 (3d6) psychic damage and is confused until the start of its next turn.' }
actions:
    - { name: Multiattack, desc: 'The worm constricts once and attacks once with its bite.' }
    - { name: Constrict, desc: 'Melee Weapon Attack: +9 to hit, reach 5 ft., one creature. Hit: 21 (3d10 + 5) bludgeoning damage. The target is grappled (escape DC 17) and restrained while grappled.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +9 to hit, reach 5 ft., one creature. Hit: 21 (3d10 + 5) piercing damage. If the target is killed by this attack, the worm eats its head.' }
'bonus actions':
    - { name: 'Mental Summons', desc: 'One creature with an Intelligence score greater than 3 within 120 feet makes a DC 16 Wisdom saving throw. On a failure, it uses its reaction to move up to its Speed towards the worm by the shortest route possible, avoiding hazards but not opportunity attacks. This is a magical charm effect.' }
combat:
    - { name: 'The worm approaches the creature with the highest Intelligence score while using its Mental Summons on that creature', desc: "On the way to its intended victim, it attacks any creature next to it, targeting the smartest creature available on its turn. It fights to the death, retreating only if it can't reach any prey." }

---
```statblock
monster: Murmuring Worm
```
