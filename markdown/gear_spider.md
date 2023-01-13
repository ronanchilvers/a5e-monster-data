---
statblock: true
name: 'Gear Spider - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Tiny
type: Construct
cr: 1
ac: 13
hp: 28
hit_dice: '8d4 + 8'
speed: '30 ft., climb 20 ft.'
stats:
    - 6
    - 15
    - 12
    - 2
    - 6
    - 1
damage_immunities: 'poison, psychic'
condition_immunities: 'blinded, charmed, deafened, exhaustion, frightened, paralyzed, petrified, poisoned'
skillsaves:
    perception: 0
    stealth: 4
senses: 'blindsight 60 ft., passive Perception 10'
traits:
    - { name: 'Clockwork Nature', desc: "A clockwork doesn't require air, nourishment, or rest, and is immune to disease." }
    - { name: 'Immutable Form', desc: 'The clockwork is immune to any effect that would alter its form.' }
actions:
    - { name: Claw, desc: 'Melee Weapon Attack: +0 to hit, reach 5 ft., one target. Hit: 1 slashing damage.' }
    - { name: Needle, desc: 'Ranged Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 4 (1d4 + 2) piercing damage.' }
'bonus actions':
    - { name: Photograph, desc: 'The gear spider stores a black and white image of what it can see. The gear spider can hold up to 10 images at a time. Retrieving the image storage device inside the gear spider requires 1 minute. Once the device is accessed, viewing a stored image requires a DC 12 Investigation check to make out any details.' }
combat:
    - { name: 'The gear spider has perfect memory of an area no larger than a 1,000-foot cube', desc: 'When the gear spider senses an intruder or a clue to intrusion in its area, it uses Photograph. If attacked, it responds with its needle attack and flees.' }

---
```statblock
monster: Gear Spider - A5E
```
