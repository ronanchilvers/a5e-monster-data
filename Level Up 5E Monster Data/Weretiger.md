---
statblock: true
name: Weretiger
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 2
ac: 13
hp: 90
hit_dice: '12d8 + 36'
speed: '30 ft. (40 ft. in tiger form)'
stats:
    - 16
    - 16
    - 16
    - 10
    - 12
    - 10
damage_immunities: 'damage from nonmagical, non-silvered weapons'
skillsaves:
    - { perception: 3 }
    - { stealth: 5 }
senses: 'darkvision 60 ft. (tiger or hybrid form only), passive Perception 15'
languages: Common
traits:
    - { name: 'Keen Hearing and Smell', desc: 'The weretiger has advantage on Perception checks that rely on hearing or smell.' }
    - { name: Wolfsbane, desc: 'Lycanthropes are repelled by the wolfsbane flower. A lycanthrope in hybrid or beast form is poisoned while within 10 feet of a living or dried wolfsbane flower that it can smell. If wolfsbane is applied to a weapon or ammunition, lycanthropes are damaged by the weapon as if it were silver. An application of wolfsbane lasts for 1 hour.' }
actions:
    - { name: 'Multiattack (Humanoid or Hybrid Form Only)', desc: 'The weretiger makes two attacks, neither of which can be a bite.' }
    - { name: 'Longsword (Humanoid or Hybrid Form Only)', desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 7 (1d8 + 3) slashing damage.' }
    - { name: 'Longbow (Humanoid or Hybrid Form Only)', desc: 'Ranged Weapon Attack: +5 to hit, range 150/600 ft., one target. Hit: 7 (1d8 + 3) piercing damage.' }
    - { name: 'Claw (Tiger or Hybrid Form Only)', desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 7 (1d8 + 3) slashing damage. If the weretiger moves at least 20 feet straight towards the target before the attack, the target makes a DC 13 Strength saving throw, falling prone on a failure.' }
    - { name: 'Bite (Tiger or Hybrid Form Only)', desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 8 (1d10 + 3) piercing damage. If the target is a humanoid, it makes a DC 13 Constitution saving throw. On a failure, it is cursed with weretiger lycanthropy.' }
'bonus actions':
    - { name: Shapeshift, desc: "The weretiger changes its form to a Large tiger, a tiger-humanoid hybrid, or into its true form, which is a humanoid. While shapeshifted, its statistics are unchanged except for its size. It can't speak in tiger form. Its equipment is not transformed. It reverts to its true form if it dies." }
    - { name: 'Opportune Bite (Tiger or Hybrid Form Only)', desc: 'The weretiger makes a bite attack against a prone creature.' }
    - { name: 'Frenzied Bite (While Bloodied, Tiger or Hybrid Form Only)', desc: 'The weretiger makes a bite attack.' }
combat:
    - { name: 'The weretiger prefers to fight in either humanoid or tiger form, but it may switch to hybrid form and use Frenzied Bite when bloodied', desc: 'It resists this urge if hiding its identity or trying to avoid spreading lycanthropy.' }

---
```statblock
monster: Weretiger
```
